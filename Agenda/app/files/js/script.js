/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

var path = 'http://localhost/Agenda/';

function Request() {
     
     var callbacks = $.Callbacks();
     this.get  = function(url,call){
          
          $.ajax({
               url : url,
               type : 'GET',
               success : function(data){
                    callbacks.add(eval(call));
                    callbacks.fire(data);
               }
          });
     }
     this.post = function(url,form,call){
          
          var f = $('#'+form).serialize();
          $.ajax({
               url : url,
               type : 'POST',
               data : f,
               success : function(data){
                    callbacks.add(eval(call));
                    callbacks.fire(data);
               }
          });
     }
     this.json = function(url,call){
          $.ajax({
               url : url,
               type : 'JSON',
               success : function(data){
                    callbacks.add(eval(call));
                    callbacks.fire(data);
               }
          });
     }
}

var request = {
   post : function(url,form,callback){
        new Request().post(url, form, callback);
   },
   get  : function(url,callback){
        new Request().get(url, callback);
   },
   json : function(url,form,callback){
        new Request().json(url, form, callback);
   }
};    