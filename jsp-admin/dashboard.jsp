<%@ page import="java.util.*" %>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<!doctype html>
<html>
<head><title>Dashboard — SNG</title>
<link rel="stylesheet" href="/frontend/assets/css/style.css" />
</head>
<body>
<header class="topbar">
<div class="brand">SNG <span class="accent">Hospital</span></div>
</header>
<main style="padding:28px">
<div class="card">
<h2>Dashboard</h2>
<p>Server time: <%= new java.util.Date() %></p>
<div id="patients">Loading patients...</div>
</div>
</main>
<script>
async function load(){
try{
const r = await fetch('/php-api/patients.php')
const j = await r.json()