<?php echo $header;?>
<style>
    .stlog_form {width: 100%; padding: 10%; border: 2px solid; box-shadow: 1px 1px 0px #999, 2px 2px 0px #999, 3px 3px 0px #999, 4px 4px 0px #999, 5px 5px 0px #999, 6px 6px 0px #999;}
</style>
<main id="main">
    <section id="about" class="about section-bg">
      <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form class="stlog_form" method="post" action="<?php echo base_url()?>faculty/login">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example1">Email address</label>
                        <input type="email" id="email" name="email" class="form-control" />
                    </div>
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example2">Password</label>
                        <input type="password" id="password" name="password" class="form-control" />
                    </div>
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col">
                        <a href="#!">Forgot password?</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
      </div>
    </section>
</main>