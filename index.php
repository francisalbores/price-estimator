<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Website Development Price Builder</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
.header{
  margin-top:70px;
}
.estimator{
  box-shadow: 0 1px 1px #aaa;
  background: #fff;
}
body{
  background-color: #eee;
}
ul{
  list-style: none;
}
label{
  font-weight: normal;
}
em{
  font-size: smaller;
}
    </style>
  </head>
  <body>
    <div class="navbar-fixed-top estimator">
      <div class="container">
        <h4>Estimated Hours</h4>
        <div class="progress">
          <div class="progress-bar progress-bar-success" style="width: 25%">
            <span class="sr-only">35% Complete (success)</span>
            Wireframe <em>16 hrs</em>
          </div>
          <div class="progress-bar progress-bar-warning" style="width: 35%">
            <span class="sr-only">35% Complete (success)</span>
            Design <em>0 hrs</em>
          </div>
          <div class="progress-bar progress-bar-danger progress-bar-striped" style="width: 40%">
            <span class="sr-only">20% Complete (warning)</span>
            Build / Code <em>0 hrs</em>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row header">
        <div class="col-md-12">
          <h2>Hello John</h2>  
          <h3>Website Design and Build Estimator</h3>    
          <p>Please select your features below, and we'll give you an instant estimate for your site revamp project.</p>
        </div>
      </div>
      <div class="row">

        <ul>
          <h4>Unique Page Layouts</h4>
          <li>
            <input type="checkbox" />
            <label>Homepage</label>
          </li>
          <li>
            <input type="checkbox" />
            <label>Contact Page</label>
          </li>
          <li>
            <input type="checkbox" />
            <label>Blog</label>
          </li>
          <li>
            <input type="checkbox" />
            <label>Sitemap <em>(e.g. Links)</em></label>
          </li>
          <li>
            <input type="checkbox" />
            <label>One Column Page <em>(e.g. About )</em></label>
          </li>
        </ul>
  
        <ul>
          <h4>Features</h4>
          <li>
            <input type="checkbox" />
            <label>Hero Banner Slider <em>(A great and cool way to showcase featured properties from homepage with animation on transition effects)</em></label>
          </li>
          <li>
            <input type="checkbox" />
            <label>Maps Locator <em>(Some clients wants to pick a place from pointing a map. We can put a general or big scope instead of specific address to secure your potential clients.)</em></label>
          </li>
          <li>
            <input type="checkbox" />
            <label>Search and Filter Functionality <em>(Some clients wants to search their preference than browsing from page to page.)</em></label>
          </li>
          <li>
            <input type="checkbox" />
            <label>Price Range Filter</label>
          </li>
          <li>
            <input type="checkbox" />
            <label>Posted Filter (e.g. Latest posted, last n days)</label>
          </li>
          <li>
            <input type="checkbox" />
            <label>Condition Filter (New, Foreclosed, Pre-owned)</label>
          </li>
          <li>
            <input type="checkbox" />
            <label>Image Gallery Per Property</label>
          </li>
          <li>
            <input type="checkbox" />
            <label>Responsive <em>(Mobile Ready, can be viewed by clients who are using any devices. This will increase the scope of potential clients.)</em></label>
          </li>
          <li>
            <input type="checkbox" />
            <label>One Page Loading <em>(Much faster user experience, using AJAX and ANGULAR - Modern development.)</em></label>
          </li>
          <li>
            <input type="checkbox" />
            <label>Chat <em>(Mobile Ready, can be viewed by clients who are using any devices. This will increase the scope of potential clients.)</em></label>
          </li>
          <li>
            <input type="checkbox" />
            <label>Property Listing Manager <em>(So that the Admin can add New property details easily from the Manager page.)</em></label>
          </li>
        </ul>
        
        <ul>
          <h4>Platform</h4>
          <li>
            <input type="checkbox" />
            <label>Wordpress</label>
          </li>
          <li>
            <input type="checkbox" />
            <label>Laravel</label>
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>