<?php namespace MVC\System\Http;
class Response 
{
    /**
     * 
     * @param type String URL para aonde a aplicação deve ser redirecionada
     */
    public function redirectTo($url)
    {
        header('Location: ' . DIRECTORY . $url);
    }
}
