<html>
    <head>
     <title> Result </title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<style>
	.hide-text{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0;}
.input-block-level{display:block;width:100%;min-height:30px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
.btn-file{overflow:hidden;position:relative;vertical-align:middle;}.btn-file>input{position:absolute;top:0;right:0;margin:0;opacity:0;filter:alpha(opacity=0);transform:translate(-300px, 0) scale(4);font-size:23px;direction:ltr;cursor:pointer;}
.fileupload{margin-bottom:9px;}.fileupload .uneditable-input{display:inline-block;margin-bottom:0px;vertical-align:middle;cursor:text;}
.fileupload .thumbnail{overflow:hidden;display:inline-block;margin-bottom:5px;vertical-align:middle;text-align:center;}.fileupload .thumbnail>img{display:inline-block;vertical-align:middle;max-height:100%;}
.fileupload .btn{vertical-align:middle;}
.fileupload-exists .fileupload-new,.fileupload-new .fileupload-exists{display:none;}
.fileupload-inline .fileupload-controls{display:inline;}
.fileupload-new .input-append .btn-file{-webkit-border-radius:0 3px 3px 0;-moz-border-radius:0 3px 3px 0;border-radius:0 3px 3px 0;}
.thumbnail-borderless .thumbnail{border:none;padding:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;}
.fileupload-new.thumbnail-borderless .thumbnail{border:1px solid #ddd;}

		html {
  box-sizing: border-box;
}

*, *::after, *::before {
  box-sizing: inherit;
}

*, *:before, *:after {
  box-sizing: border-box;
  outline: none;
}
 body{
            background: #cb2d3e;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to top,#616161, #F44336);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #616161, #F44336); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
body {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100vh;
  font-family: 'Source Sans Pro', sans-serif;
  font-size: 16px;
  font-smooth: auto;
  background-color: whitesmoke;
  font-weight: 300;
  line-height: 1.5;
}
body:before {
  position: absolute;
  content: '';
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}

p {
  font-weight: 400;
}

a {
  text-decoration: none;
}

label {
  cursor: pointer;
}

.modal-btn {
  position: relative;
  height: 30px;
  font-size: 20px;
  color: #F44336;
  text-align: center;
  transition: box-shadow 250ms ease;
}

.modal-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  z-index: 10;
  visibility: hidden;
  transition: background-color 250ms linear;
}

.modal-content {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 50%;
  height: auto;
  margin-top: -18%;
  margin-left: -25%;
  padding: 30px;
  background: #FFF9C4;
  border-radius: 4px;
  box-shadow: 0 0 50px rgba(0, 0, 0, 0.5);
  transform: scale(0);
  transition: transform 250ms ease;
  visibility: hidden;
  z-index: 20;
}
.modal-content .close {
  position: relative;
  float: right;
  font-size: 18px;
  transition: transform 500ms ease;
  z-index: 11;
}
.modal-content .close:hover {
  color: #3498db;
  transform: rotate(540deg);
}
.modal-content header {
  position: relative;
  display: block;
  border-bottom: 1px solid #eee;
}
.modal-content header h2 {
  margin: 0 0 10px;
  padding: 0;
  font-size: 28px;
}
.modal-content article {
  position: relative;
  display: block;
  margin: 0;
  padding: 0;
  font-size: 16px;
  line-height: 1.75;
}
.modal-content footer {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: flex-end;
  width: 100%;
  margin: 0;
  padding: 10px 0 0;
}
.modal-content footer .button {
  position: relative;
  padding: 10px 30px;
  border-radius: 3px;
  font-size: 14px;
  font-weight: 400;
  color: white;
  text-transform: uppercase;
  overflow: hidden;
}
.modal-content footer .button:before {
  position: absolute;
  content: '';
  top: 0;
  left: 0;
  width: 0;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.2);
  transition: width 250ms ease;
  z-index: 0;
}
.modal-content footer .button:hover:before {
  width: 100%;
}
.modal-content footer .button.success {
  margin-right: 5px;
  background-color: #2ecc71;
}
.modal-content footer .button.danger {
  background-color: #e74c3c;
}

#modal {
  display: none;
}
#modal:checked ~ .modal-bg {
  visibility: visible;
  background-color: black;
  opacity: 0.7;
  transition: background-color 250ms linear;
}
#modal:checked ~ .modal-content {
  visibility: visible;
  transform: scale(1);
  transition: transform 250ms ease;
  z-index: 111;
}

	</style>
  <style type="text/css">
    .ball {
  position: absolute;
  border-radius: 100%;
  opacity: 0.7;
}
  </style>
</head>
<body>
	<input type="checkbox" id="modal" />
<h2 class="blurp" style="color: #fff"><strong>Congratulations!</strong></h2>
<label for="modal" class="modal-btn">
	<h4><u>Click Here to Proceed</u></h4>
</label>
<!-- <div class="modal-bg"></div> -->
<label for="modal" class="modal-bg"></label>
<div class="modal-content">
	<label for="modal" class="close">
		<i class="fa fa-times" aria-hidden="true"></i>
	</label>
	<header>
		<h2 style="color: #F44336"><strong>Hurray!</strong></h2>
	</header>
	<article class="content">
		<h3 style="color: #0D47A1"><strong>KUDOS..</strong>..You have qualified</h3><br/>
		<h4><u>Provide the following details-</u></h4>
		<div class="row">
			<div class="col-md-4">
				<h4>Resume (pdf)</h4>
			</div>
			<div class="col-md-8">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                    <span class="btn btn-outline-danger btn-file" style="border-color: #000 ">
                    <span class="fileupload-new">Upload Resume</span>
                    <span class="fileupload-exists">Upload Resume</span>         
                    <input type="file"  name="Upload"/>
                    </span>
                    <span class="fileupload-preview"></span>
                    <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                </div>
            </div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<h4>Video Profile (drive link)</h4>
			</div>
			<div class="col-md-8" style="border-color: #000 ">
				<input type="text" id="video_link" name="v_link" class="form-control sign-input" placeholder="Share the Link Here" required autofocus>
                <label for="inputVLink" class="sr-only">Share the Link Here</label>
            </div>
		</div>
	</article>
	<footer>
		<a href=" " target="_parent" class="button success">Submit</a>
		<label for="modal" class="button danger">Decline</label>
	</footer>
</div>


  <script>
      var file = undefined;
! function(e) {
    var t = function(t, n) {
        this.$element = e(t), this.type = this.$element.data("uploadtype") || (this.$element.find(".thumbnail").length > 0 ? "image" : "file"), this.$input = this.$element.find(":file");
        if (this.$input.length === 0) return;
        this.name = this.$input.attr("name") || n.name, this.$hidden = this.$element.find('input[type=hidden][name="' + this.name + '"]'), this.$hidden.length === 0 && (this.$hidden = e('<input type="hidden" />'), this.$element.prepend(this.$hidden)), this.$preview = this.$element.find(".fileupload-preview");
        var r = this.$preview.css("height");
        this.$preview.css("display") != "inline" && r != "0px" && r != "none" && this.$preview.css("line-height", r), this.original = {
            exists: this.$element.hasClass("fileupload-exists"),
            preview: this.$preview.html(),
            hiddenVal: this.$hidden.val()
        }, this.$remove = this.$element.find('[data-dismiss="fileupload"]'), this.$element.find('[data-trigger="fileupload"]').on("click.fileupload", e.proxy(this.trigger, this)), this.listen()
    };
    t.prototype = {
        listen: function() {
            this.$input.on("change.fileupload", e.proxy(this.change, this)), e(this.$input[0].form).on("reset.fileupload", e.proxy(this.reset, this)), this.$remove && this.$remove.on("click.fileupload", e.proxy(this.clear, this))
        },
        change: function(e, t) {
            if (t === "clear") return;
            var n = e.target.files !== undefined ? e.target.files[0] : e.target.value ? {
                name: e.target.value.replace(/^.+\\/, ""),
                size: e.target.value.size,
            } : null;
            if (!n) {
                this.clear();
                return
            }
            this.$hidden.val(""), 
            this.$hidden.attr("name", ""), 
            this.$input.attr("name", this.name);
            if (typeof FileReader != "undefined") {
                var r = new FileReader,
                    i = this.$preview,
                    s = this.$element;
                r.onload = function(e) {
                    var result = {
                        name: n.name,
                        data: e.target.result,
                        size: n.size,
                    }
                    i.text(result.name), s.addClass("fileupload-exists").removeClass("fileupload-new")
                }, r.readAsDataURL(n)
            } else this.$preview.text(n.name), this.$element.addClass("fileupload-exists").removeClass("fileupload-new")
        },
        clear: function(e) {
            this.$hidden.val(""), this.$hidden.attr("name", this.name), this.$input.attr("name", "");
            if (navigator.userAgent.match(/msie/i)) {
                var t = this.$input.clone(!0);
                this.$input.after(t), this.$input.remove(), this.$input = t
            } else this.$input.val("");
            this.$preview.html(""), this.$element.addClass("fileupload-new").removeClass("fileupload-exists"), e && (this.$input.trigger("change", ["clear"]), e.preventDefault())
            file = undefined;
        },
        reset: function(e) {
            this.clear(), this.$hidden.val(this.original.hiddenVal), this.$preview.html(this.original.preview), this.original.exists ? this.$element.addClass("fileupload-exists").removeClass("fileupload-new") : this.$element.addClass("fileupload-new").removeClass("fileupload-exists")
        },
        trigger: function(e) {
            this.$input.trigger("click"), e.preventDefault()
        }
    }, e.fn.fileupload = function(n) {
        return this.each(function() {
            var r = e(this),
                i = r.data("fileupload");
            i || r.data("fileupload", i = new t(this, n)), typeof n == "string" && i[n]()
        })
    }, e.fn.fileupload.Constructor = t, e(document).on("click.fileupload.data-api", '[data-provides="fileupload"]', function(t) {
        var n = e(this);
        if (n.data("fileupload")) return;
        n.fileupload(n.data());
        var r = e(t.target).closest('[data-dismiss="fileupload"],[data-trigger="fileupload"]');
        r.length > 0 && (r.trigger("click.fileupload"), t.preventDefault())
    })
    }(window.jQuery)
    </script>
    <script type="text/javascript">
      // Some random colors
const colors = ["#3CC157", "#2AA7FF", "#1B1B1B", "#FCBC0F", "#F85F36"];

const numBalls = 150;
const balls = [];

for (let i = 0; i < numBalls; i++) {
  let ball = document.createElement("div");
  ball.classList.add("ball");
  ball.style.background = colors[Math.floor(Math.random() * colors.length)];
  ball.style.left = `${Math.floor(Math.random() * 100)}vw`;
  ball.style.top = `${Math.floor(Math.random() * 100)}vh`;
  ball.style.transform = `scale(${Math.random()})`;
  ball.style.width = `${Math.random()}em`;
  ball.style.height = ball.style.width;
  
  balls.push(ball);
  document.body.append(ball);
}

// Keyframes
balls.forEach((el, i, ra) => {
  let to = {
    x: Math.random() * (i % 2 === 0 ? -11 : 11),
    y: Math.random() * 12
  };

  let anim = el.animate(
    [
      { transform: "translate(0, 0)" },
      { transform: `translate(${to.x}rem, ${to.y}rem)` }
    ],
    {
      duration: (Math.random() + 1) * 2000, // random duration
      direction: "alternate",
      fill: "both",
      iterations: Infinity,
      easing: "ease-in-out"
    }
  );
});

    </script>
</body>
</html>