<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registration</title>
    </head>
    <body>
        @if(Session::has('post_add'))
        <span>
            {{Session::get('post_add')}}
        </span>
        @endif
         <form id="formoid" method ="POST" action ="{{route('save.post')}}">
             @csrf
             <head>REGISTRATION</head><br><br>
             <label> Name: </label>         
            <input type="text" name="name" value="" size="15"/> <br> <br>  

        <label> Address: </label>   
          <textarea   name="description" value="" size="15" ></textarea><br>
        
  <label>   
Phone :  
</label>  
  
<input type="text" name="phonenumber" size="15"/> <br> <br> 
 
Email:  
<input type="email" id="email" name="email" size="15"/> <br>    
<br>  
Password:  
<input type="Password" id="password" name="password" size="15"> <br>   
<br> 
<div class="form-group"> 
          <input type= "submit" name="" value="Submit">
</div>
        </form>
        
    </body>
</html>
