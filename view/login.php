{%  include 'includes/head.html' %}
<title>Login</title>
{% include 'includes/header.html' %}
<main >
    <form class="w-50" action="/sign-up" method="post">
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="email" class="form-control" name="usuario" id="usuario" value="1@2.com">

        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" value="1234">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</main>
{% include 'includes/footer.html' %}