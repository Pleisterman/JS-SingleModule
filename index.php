<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Single Javascript Module</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


<script type="text/javascript">
   ( function() {

        // Add the module to the window 
        // so it is publicly accessible.
        window.module = new function(){};

        // private 
        // Because of scope problems with callbacks  
        // a self variable has been created

        var self = window.module;

        // This function is not publicly accessible
        self.construct = function() {
        };

        // this function will be made accessible in the return.
        self.start = function() {
            alert( 'hello World' );
        };
        
        // Because of initialisation we have choosen
        // to use a construct function
        // this will garanty that the whole module is 
        // loaded when the construct is called.
        
        self.construct();

        // public
        return {
            // de functie start is made accessible
            start : function() {
                // de public function calls the private function. 
                self.start();
            }
        };
        // Pay attention this function is 'self invoking' 
        // it will be automaticly executed.
    })();

    // add an event on window load. 
    // all javascripts are loaded
    window.onload = function() {
        // de module has been constructed by itself.
        // we can just use it.
        module.start();
    };
</script>    
    
    </head>
    <body>
    </body>
</html>
