<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Exception;

class Base extends Model
{
    /**
     * Gerencia os metodos SAVE e UPDATE de um Model
     *
     * @param array $data
     * @return $this
     */
    public static function store($data = [])
    {
        // inicia o acoplamento de uma transacao
        DB::beginTransaction();

        try {
            // verifica qual acao
            if (!empty($data['id'])) {
                // recupera a entidade
                $entity = self::find($data['id']);
                // realiza o update
                $entity->update($data);

                // efetiva a transacao
                DB::commit();
                // retorna a entidade atualizada
                return $entity;
            } else {
                // realiza o save e retorna o objeto
                return self::create($data);
            }
        } catch (Exception $exception) {
            // descarta a transacao
            DB::rollback();
            // retorna o erro
            throw new Exception($exception);
        }
    }

    /**
     * Altera o status do registro
     *
     * @param int $id
     * @return $this
     */
    public static function toggleStatus($id)
    {
        // inicia o acoplamento de uma transacao
        DB::beginTransaction();

        try {
            $entity = self::find($id);
            $entity->status = !$entity->status;
            $entity->save();
            // efetiva a transacao
            DB::commit();
            // retorna a entidade atualizada
            return $entity;
        } catch (Exception $exception) {
            // descarta a transacao
            DB::rollback();
            // retorna o erro
            throw new Exception($exception);
        }
    }
}
