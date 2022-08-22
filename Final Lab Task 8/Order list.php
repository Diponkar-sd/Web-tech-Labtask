<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Order list</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br><br><br><br><br>  
           <div class="container" style="width:500px;">  
                                
                <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br /> 
                     <fieldset>
                        <legend>Order list</legend> 
                     <label>Product name</label>  
                     <input type="text" name="Product name" class="form-control" /><br />  
                     <label>Price</label>  
                     <input type="text" name="Price" class="form-control" /><br /> 
                     <label>Customer location</label>
                     <input type="email" name = "Customer location" class="form-control" /><br />
                     <label>Customer number</label>
                     <input type="email" name = "Customer number" class="form-control" /><br />
                     
                     
                     

                   
                    <input type="submit" name="submit" value="Submit" />
                    <input type="submit" name="reset" value="Reset" /><br />           
                    </fieldset>           
                    <?php  
                    if(isset($message))  
                    {  
                         echo $message;  
                    }  
                    ?>  
               </form>  
          </div>  
          <br />  
     </body>  
</html>