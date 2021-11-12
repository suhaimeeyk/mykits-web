<?php
// show login page
function showLoginPage(){
 
    // remove jwt
    setCookie("jwt", "", 1);
 
    // login page html
    var html = `
        <h2>Login</h2>
        <form id='login_form'>
            <div class='form-group'>
                <label for='email'>Email address</label>
                <input type='email' class='form-control' id='email' name='email' placeholder='Enter email'>
            </div>
 
            <div class='form-group'>
                <label for='password'>Password</label>
                <input type='password' class='form-control' id='password' name='password' placeholder='Password'>
            </div>
 
            <button type='submit' class='btn btn-primary'>Login</button>
        </form>
        `;
 
    $('#content').html(html);
    clearResponse();
    showLoggedOutMenu();
}
 
// setCookie() will be here 
 
// showLoggedOutMenu() will be here
?>