<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add Post</title>
    </head>
    <body>
        @if(Session::has('post_update'))
        <span>
            {{Session::get('post_update')}}
        </span>
        @endif
         <form method ="POST" action ="{{route('update.post')}}">
             @csrf
             <input type="hidden" name="id" value="{{$post_edit->id}}">
         
<head>REGISTRATION</head><br><br>
             <label> Name: </label>         
            <input type="text" name="name" value="{{$post_edit->name}}" size="15"/> <br> <br>  

        <label> Address: </label>   
          <textarea   name="description" value="" size="15" >{{$post_edit->description}}</textarea><br>
        
  <label>   
Phone :  
</label>  
  
<input type="text" name="phonenumber"value="{{$post_edit->phonenumber}}" size="15"/> <br> <br> 
<br> <br>  
Email:  
<input type="email" id="email" name="email" value="{{$post_edit->email}}" size="15"/> <br>    
<br> <br>  
Password:  
<input type="Password" id="password" name="password" value="{{$post_edit->password}}" size="15"> <br>   
<br> <br> 
<div class="form-group"> 
          <input type= "submit" name="" value="Submit">
</div>
        </form>
        
    </body>
</html>

