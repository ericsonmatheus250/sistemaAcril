<?php if(!class_exists('Rain\Tpl')){exit;}?>		<script src="/res/system/js/funcoes.js"></script>
        <script src="/res/system/js/jquery.min.js"></script>
        <script src="/res/system/js/popper.js"></script>
        <script src="/res/system/js/bootstrap.min.js"></script>
        <script src="/res/system/js/main.js"></script>
        <script>
            $(".btn-view").on("click", function() {
            $("#body-view").css({
                "display": "block",
                "transition": "10s"
                })
            })
            $(".btn-close").on("click", function() {
            $("#body-view").css({
                "display": "none",
                "transition": "10s"
                })
            })
        </script>
	</div>
</body>
</html>