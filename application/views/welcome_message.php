<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AInimal 網頁工程招募 | 後端工程測驗題</title>
		<script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
		<style type="text/css" media="screen">
			.bg{
			    position: absolute;
			    top: 0;
			    right: 0;
			    bottom: 0;
			    left: 0;
			    min-height: 100vh;
			    background: url("bg.svg");
			    background-repeat: no-repeat;
			    background-size: cover;
			}
			.mask {
			    position: absolute;
			    top: 0;
			    right: 0;
			    bottom: 0;
			    left: 0;
			    background-color: rgba(100, 108, 107, 0.8);
			}
			.title{
			    width: 100%;
			    text-align: center;
			}
			.formation{
			    margin: 0 auto;
			    padding: 200px 0;
			    width: 80%;
			    text-align: center;

			}
			.key-value-container {
			    display: flex;
			    flex-wrap: nowrap;
			    align-items: center;
			    margin: 20px 0;

			}
			.key{
			    margin-right: 1.5em;
			    color: #ededeb;
			    text-align: right;
			    white-space: nowrap;
			    font-size: 14px;
			    font-weight: 400;
			}
			input{
			    background-color: #FFFFFF;
			    width: 235px;
			    height: 31px;
			    padding: 2px 20px;
			    border: #EEEEEC 3px solid;
			    border-radius: 50px;
			    box-sizing: border-box;
			    text-align: left;
			    text-overflow: ellipsis;
			    font-size: 17px;
			    font-weight: 400;
			    line-height: 15px;
			    color: #49301C;
			}
			.submit{
			    width: 60%;
			    padding: 5px;
			    font-size: 17px;
			    color: #49301c;
			    background-color: #fdc675;
			    border-radius: 30px;
			    border: none;
			    outline: none;
			}
		</style>

</head>

<body>
    <div class="bg">
        <div class="mask">
            <div class="title">
                <h1>AInimal測驗介面</h1>
            </div>
            <div class="formation">
                <div class="key-value-container">
                    <h1 class="key">帳號</h1>
                    <input type="email" id="email" name="email" placeholder="請輸入 email">
                </div>
                <div class="key-value-container">
                    <h1 class="key">密碼</h1>
                    <input type="password" id="password" name="password" placeholder="請輸入密碼">
                </div>
                <button type="submit" class="submit" id="submit-btn" >確定</button>
								<script type="text/javascript">
                let submit_btn=document.getElementById("submit-btn")

                submit_btn.addEventListener("click",function(){
                    let email=document.getElementById("email").value
                    let password=document.getElementById("password").value
                    let data={email:email,password:password}
                    $.ajax({
                        url:"http://localhost:8000/login/check.php",
                        method:"POST",
                        data:data,
                        success:function(res){alert(res);},
                        fail:function(err){console.log(err);}
                      })
                });
								</script>

						</div>
        </div>

    </div>

</body>

</html>
