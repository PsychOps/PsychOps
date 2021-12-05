<div class="cookie-box notnavtext">
    <i class="fas fa-cookie fa-3x"></i>
    <div class="cookie-content">
      <header>Cookies Consent</header>
      <p>Cookies are collected by Google Analytics for Google Analytics. We use them to see information about our website visitors and to adjust our website to fit the needs of our users.</p>
      <div class="cookie-btns">
        <button class="c-item">I understand</button>
        <a href="https://psychops.tk/legal.php#collected" target="_blank" class="c-item">Learn more</a>
      </div>
    </div>
</div>
<script>
    const cookieBox = document.querySelector(".cookie-box"),
    acceptBtn = cookieBox.querySelector("button");
    acceptBtn.onclick = ()=>{
      //Cookies last one month
      document.cookie = "CookieBy=PsychOps; max-age="+60*60*24*30;
      if(document.cookie){
        cookieBox.classList.add("hide");
      }else{
        alert("Cookie can't be set! Please unblock this site from the cookie setting of your browser.");
      }
    }
    let checkCookie = document.cookie.indexOf("CookieBy=PsychOps");
    checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
  </script>
