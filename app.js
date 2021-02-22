let submit_btn=document.getElementById("submit-btn")


submit_btn.addEventListener("click",function(){
    let email=document.getElementById("email").value
    let password=document.getElementById("password").value
    let data={email:email,password:password}
    $.ajax({
        url:"http://localhost:8000/login/check.php",
        method:"POST",
        data:data,
        success:function(res){
          alert(res);
          if(res=="success"){
            window.location.href="https://www.youtube.com/watch?v=072tU1tamd0";
          }
        },
        error:function(err){console.log(err)},
      })
})
