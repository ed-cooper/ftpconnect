<div id="footer">
    <div id="footer-top">
        <a href="/" id="footer-name">FTP Connect</a>
    </div>
    <div id="footer-bottom">
        <ul id="footer-nav">
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/contact-us/">Contact</a>
            </li>
            <li>
                <a href="/legal/">Legal</a>
            </li>
            <li>
                <a href="/privacy-policy/">Privacy Policy</a>
            </li>
            <li>
                <a href="https://github.com/chooper100/ftpconnect" target="_blank">Github</a>
            </li>
        </ul>
        <span id="copyright">&copy Chooper100, 2016</span>
    </div>
</div>
<style>
    #footer {
        background-color: #e3dbdb;
        overflow: hidden;
        width: 100%;
        box-sizing: border-box;
    }
    
    #footer-top {
        padding: 10px 15px;
    }
    
    #footer-name {
        font-weight: 200;
        color: #555;
        text-decoration: none;
        margin: 5px 0;
        display: inline-block;
    }
    
    #footer-name:hover {
        font-weight: 900;
    }
    
    #footer-bottom {
        padding: 10px 15px;
        border-top: 1px solid #bbb;
        overflow: hidden;
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
    
    @media (max-width: 768px) {
        #footer-nav li {
            float: none;
            margin: 7px 0;
        }
    }
</style>
<script>
    document.onreadystatechange = function () {
        var state = document.readyState;
        if (state == 'complete') {
            var footer = document.getElementById("footer");
            if (footer.getBoundingClientRect().bottom + window.pageYOffset < window.innerHeight) {
                footer.style.position = "absolute";
                footer.style.bottom = 0;
            }
        }
    };
</script>