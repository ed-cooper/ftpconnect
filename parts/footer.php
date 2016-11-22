<div id="footer">
    <ul id="footer-nav">
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="/contact-us">Contact</a>
        </li>
        <li>
            <a href="/legal">Legal</a>
        </li>
        <li>
            <a href="/privacy-policy">Privacy Policy</a>
        </li>
    </ul>
    <span id="copyright">&copy Chooper100, 2016</span>
</div>
<style>
    #footer {
        background-color: #e3dbdb;
        overflow: hidden;
        padding: 5px 10px;
        width: 100%;
        box-sizing: border-box;
    }
    
    #footer-nav {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }
    
    #footer-nav li {
        float: left;
        margin-right: 40px;
    }
    
    #footer-nav li a {
        text-decoration: none;
        display: block;
        color: #666;
        font-size: 11pt;
    }
    
    #footer-nav li a:hover {
        text-decoration: underline;
    }
    
    #copyright {
        float: right;
        color: #666;
        font-size: 11pt;
    }
</style>
<script>
    var footer = document.getElementById("footer");
    if (footer.getBoundingClientRect().bottom < window.innerHeight) {
        footer.style.position = "absolute";
        footer.style.bottom = 0;
    }
</script>