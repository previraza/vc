<?php session_start(); require isset($_SESSION['ADMIN']) ? 'started' : 'login'; ?>
<link rel="stylesheet"href="/layouts/default/css/select2.min.css">
<link rel="stylesheet" href="/public/assets/css/formulary.css">
<script src="/layouts/default/js/select2.min.js"></script>
<script>window.addEventListener('load',w=>{if ($.fn.select2!==undefined){$('select.select2').select2({width:'100%'})}})</script>