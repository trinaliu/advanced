<?php
/**
 * Created by PhpStorm.
 * User: trina
 * Date: 18-9-14
 * Time: 下午1:58
 */
?>
<style>
    #file_name {
        width: 400px;
        height: 30px;
    }

    a.input {
       width:70px;
       height:30px;
       line-height:30px;
       background:#3091d1;
       text-align:center;
       display:inline-block;/*具有行内元素的视觉，块级元素的属性 宽高*/
       overflow:hidden;/*去掉的话，输入框也可以点击*/
       position:relative;/*相对定位，为 #file 的绝对定位准备*/
       top:10px;
    }
    a.input:hover {
           background:#31b0d5;
           color: #ffffff;
    }
     a{
         text-decoration:none;
         color:#FFF;
     }
     #file {
         opacity:0;/*设置此控件透明度为零，即完全透明*/
         filter:alpha(opacity=0);/*设置此控件透明度为零，即完全透明针对IE*/
         font-size:100px;
         position:absolute;/*绝对定位，相对于 .input */
         top:0;
         right:0;
     }
</style>
<div class="image"></div>
<input type="text" id="file_name" readonly="readonly" value="">
<a href="javascript:void(0);" class="input">
    浏览
    <input type="file" id="file" name="document[file]">
</a>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#file").change(function(){  // 当 id 为 file 的对象发生变化时
            var fileSize = this.files[0].size;
            console.log(this.files);
            var size = fileSize / 1024 / 1024;
            if (size > 5) {
                alert("附件不能大于5M,请将文件压缩后重新上传！");
                this.value="";
                return false;
            }else{
                $("#file_name").val(this.files[0].name);  //将 #file 的值赋给 #file_name
                // 获取 window 的 URL 工具
                var URL = window.URL || window.webkitURL;
                // 通过 file 生成目标 url
                var imgURL = URL.createObjectURL(this.files[0]);
                //用attr将img的src属性改成获得的url
                $(".image").append("<img src='"+imgURL+"'>")
            }
        })
    });

</script>
