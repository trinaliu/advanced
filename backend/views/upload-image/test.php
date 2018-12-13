<?php
/**
 * Created by PhpStorm.
 * User: trina
 * Date: 18-9-14
 * Time: 下午2:42
 */
$this->title = 'Upload Image';
?>
<style>
    div.image {
        width: 100%;
        height: 200px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin: 20px 0;
        padding: 5px;
    }
    div.file-input {
        height: 190px;
        position: relative;
        padding: 5px;
    }
    div.remove {
        position: absolute;
        top: 0px;
        right: 0px;
        float: right;
        font-size: 21px;
        font-weight: bold;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .2;
    }
    div.remove:hover {
        cursor: pointer;
    }
    div.image-preview {
        height: 180px;
        box-shadow: 0 0 5px rgba(0,0,0,0.3);
        padding: 0 10px;
        display: table;
    }
    div.image-preview:hover {
        box-shadow: 2px 2px 5px 0 rgba(0,0,0,0.8);
    }
    img.img {
        width: auto;
        height: 130px;
        margin: 10px 0;
    }
    div.image-title {
        text-align: center;
        color: #777;
    }
    .load .load-input {
        width: 75%;
    }
    .load .load-input input {
        width: 100%;
        height:40px;
        border: 1px solid #ddd;
        -webkit-border-radius: 5px 0 0 5px;
        -moz-border-radius: 5px 0 0 5px;
        border-radius: 5px 0 0 5px;
    }
    .load .load-input, .load-btn-group {
        float: left;
    }
    .load-btn-group {
        width: 25%;
        height: 40px;
        overflow: hidden;
    }
    .delete, .upload, .select {
        height: 40px;
        background-color: white;
        border: 1px solid #ddd;
        border-left:none;
        float: left;
    }
    .delete, .upload {
        width: 30%;
    }
    .select {
        width: 35%;
        border-radius: 0 5px 5px 0;
    }
</style>
<div class="upload-image container">
    <div class="image">
        <div class="file-input">
            <div class="remove">×</div>
            <div class="image-preview">
                <img src="/images/07.jpeg" class="img">
                <div class="image-title">01.jpeg</div>
            </div>
        </div>
    </div>
    <div class="load">
        <div class="load-input">
            <input type="text">
        </div>
        <div class="load-btn-group">
            <button type="button" class="delete">删除</button>
            <button type="button" class="upload">上传</button>
            <button type="button" class="select">选择文件</button>
            <input type="file" id="file">
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script>
    $(function () {

    })
</script>
