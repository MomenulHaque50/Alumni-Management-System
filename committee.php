<?php 
include 'admin/db_connect.php'; 
?>
<style>

.masthead{
        min-height: 23vh !important;
        height: 23vh !important;
    }
     .masthead:before{
        min-height: 23vh !important;
        height: 23vh !important;
    }

</style>
<style>

section {
  height: auto;
  width: 100%;
  display: grid;
  place-items: center;
}
.column {
		margin-top: 16px;
  float: left;
  width: 30%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
	   
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

</style>
        <header class="masthead">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end mb-4 page-title">
                        <h3 class="text-white">Committee</h3>
                        <hr class="divider my-4" />

                    <div class="col-md-12 mb-2 justify-content-center">
                    </div>                        
                    </div>
                    
                </div>
            </div>
        </header>
		<section>
		<div class="row">
  <div class="column">
    <div class="card">
      <img src="assets/img/profile.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">President</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/img/profile.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Vice-President</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="assets/img/profile.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Vice-President</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="assets/img/profile.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">General Secretary</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/img/profile.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Joint Secretary</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="assets/img/profile.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Joint Secretary</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="assets/img/profile.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">Organizing Secretary</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/img/profile.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Financial Secretary</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="assets/img/profile.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Promotional Secretary</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="assets/img/profile.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">Editorial Secretary</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/img/profile.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Technology Secretary</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="assets/img/profile.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Graphics Secretary</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="assets/img/profile.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">Event Secretary</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="assets/img/profile.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Member Secretary</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="assets/img/profile.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Photography Secretary</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
      </div>
    </div>
  </div>
</div>
</section>