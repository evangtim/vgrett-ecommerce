<body>
    <div class="hero">

        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <img src="facebook-square-brands.svg" alt="facebook">
                <img src="twitter-square-brands.svg" alt="twitter">
                <img src="google-plus-square-brands.svg" alt="google">
            </div>
            <form action="" id="login" class="input-group">
            <input type="text" class="input-field" placeholder="User Id" required>
            <input type="text" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>Remember Password</span>
            <button type="submit" class="submit-btn">log in</button>
            </form>
            <form action="" id="register" class="input-group">
            <input type="text" class="input-field" placeholder="User Id" required>
            <input type="email" class="input-field" placeholder="Email Id" required>
            <input type="text" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box"><span>I agree to the terms & Conditions</span>
            <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>