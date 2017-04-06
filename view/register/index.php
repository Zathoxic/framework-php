<div id="loginContainer">
   <h1>Register here!</h1>
   <br>
   <ul>
   <li>
       <form action="<?= URL ?>register/register" method="post" id="Register">
           <input type="text" name="Firstname" placeholder="First name">
           <br/>
           <input type="text" name="Lastname" placeholder="Last name">
           <br/>
           <input type="password" name="Password" placeholder="Password">
           <br/>
           <input type="text" name="Email" placeholder="Email">
           <br/>
           <input type="hidden" name="Active" value=0>
           <br/>
           <br/>
           <input type="submit" name="Submit" value="Submit">
           <br/>
           <br/>
       </form>
    </li>
    </ul>
</div>
