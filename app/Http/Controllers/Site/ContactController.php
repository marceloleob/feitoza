<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactRequest;
use App\Services\CaptchaService;
use App\Services\ContactService;

class ContactController extends Controller
{
    /**
     * Renderiza a pagina
     *
     * @return Response
     */
    public function index()
    {
        return view('site.pages.contact')->with(['current' => 'contact']);
    }

	/**
	 * Save after validated()
	 *
	 * @param ContactRequest $request
	 * @return Response
	 */
	public function send(ContactRequest $request)
	{
		// sanitized and validated data
		$data = $request->validated();

		// valida o captcha
		$result = CaptchaService::check($request['recaptcha']);
		// verifica se validou
		if ($result->success != true) {
			return redirect()->route('contact')->with('danger', trans('validation.google'));
		}

		// save
		$response = ContactService::send($data);
		// check error
		if ($response['type'] == 'error') {
			return redirect()->route('contact')->with('danger', $response['message'])->withInput();
		}

		return redirect()->route('contact')->with('success', $response['message']);
    }

	/**
	 * Metodo criado para testar o template de email para a empresa
	 *
	 * @return Response
	 */
	public function testCompany()
	{
		$params = [
			'firstname' => 'Marcelo',
			'lastname' => 'Leopold',
			'email'    => 'marceloleob@gmail.com',
			'phone'    => '(727) 238-4933',
			'subject'  => 'Este é o título',
			'text'     => 'Mensagem teste!!!',
		];

		return view('emails.pages.contact.tobusiness')->with($params);
	}

	/**
	 * Metodo criado para testar o template de email para o cliente
	 *
	 * @return Response
	 */
	public function testCustomer()
	{
		$params = [
			'firstname' => 'Marcelo Leopold',
		];

		return view('emails.pages.contact.tocustomer')->with($params);
	}
}
