<?php namespace MVC\System\Http;

class Request {
    /**
    * Filtros customizados de tratamento
    * @var array
    */
    public $custom_filters = [];
    
    /**
    * Realiza o tratamento das super globais
    * @param  array $request 		  Array nativo com campos e valores passados
    * @param  const $data    		  Constante que será tratada
    * @param  array $custom_filters  Filtros customizados para determinados campos
    * @return array                  Constate tratada
    */
   public function filter(array $request, $data, array $custom_filters = [])
   {
           $filters = [];

           foreach ($request as $key => $value)
                   if (!array_key_exists($key, $custom_filters))
                           $filters[$key] = constant('FILTER_SANITIZE_STRING');



           if (is_array($custom_filters) && is_array($custom_filters))
                   $filters = array_merge($filters,$custom_filters);

           return filter_input_array($data, $filters);
   }
   
    /**
    * Obtém os dados enviados através do método GET
    * @param  string $name Nome do parâmetro
    * @return null         Retorna o array GET geral ou em um índice específico
    */
    public function get($name = null)
    {
           $get = $this->filter($_GET, INPUT_GET, $this->custom_filters);

           if (!$name)
                   return $get;


           if (!($get[$name]))
                   return null;


           return $get[$name];
    }

    /**
    * Obtém os dados enviados através do método POST
    * @param  string $name Nome do parâmetro
    * @return null         Retorna o array POST geral ou em um índice específico
    */
    public function post($name = null)
    {
           $post = $this->filter($_POST, INPUT_POST, $this->custom_filters);

           if (!$name)
                   return $post;

           if (!($post[$name]))
                   return null;


           return $post[$name];
    }
}
