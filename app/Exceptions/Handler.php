<?php

namespace App\Exceptions;

use App\Traits\ApiResponser;
//use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

use Illuminate\Database\QueryExeption;
/*Importamos validationExeption*/
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\httpKernel\Exception\NotFoundHttpException;
use Symfony\component\httpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;

class Handler extends ExceptionHandler
{
    use ApiResponser;
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [

    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    public function render($request, Exception $exception)
    {
        //Hacemos exepcion del metodo validate
        if ($exception instanceof ValidationException) {
            return $this->convertValidationExceptionToResponse($exception,$request);
        }
        //Hacemos una validacion pra el modelNotFund Exeption
        if ($exception instanceof ModelNotFoundException) {
            //accedemos al modelo obteniendo su clase ynombre completo
            $model= class_basename($exception->getModel());
            return $this->errorResponse("No se encontró una instancia de {$model} con un ID especificado",404);
        }

        //Validacion de Autenticacion
        if ($exception   instanceof AuthenticationException) {
            return $this->unauthenticated($request, $exception  );
        }
        if ($exception instanceof AuthorizationException) {
            return $this->errorResponse('No poseé permisos para ejecutar esta accion',403/*Codigo denegado*/ );
        }
        if ($exception instanceof NotFoundHttpException) {
            return $this->errorResponse('No se encontró la URL Especificada',404);
        }
        if ($exception instanceof MethodNotAllowedHttpException) {
            return $this->errorResponse('El método de la petición no es valido',405);
        }

        //exepciones en peticiones Http con respuesta de symfony
        if ($exception instanceof HttpException) {
            return $this->errorResponse($exception->getMessage,$exception->getStatusCode());
        }

        //Accederemos a la configuracion de modo depuracion para verificar si ahay un error 500
        if (config('app.debug')) {
            return parent::render($request, $exception);
        }
        return $this->errorResponse("Algo anda mal, intente más tarde",500);
    }

    //Validationexeption
    /**
     * Create a response object from the given validation exception.
     *
     * @param  \Illuminate\Validation\ValidationException  $e
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function convertValidationExceptionToResponse(ValidationException $e, $request)
    {
        $errors=$e->validator->errors()->getMessages();
        return $this->errorResponse($errors,422);
    }
    //Creamos en metodo unautenticable
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return $this->errorResponse('No autenticado',401);
    }
}
