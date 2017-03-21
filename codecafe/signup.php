<?php
    $page_title = 'Home';
    $site_title = 'Code Cafe';
    $site_index = '/codecafe';
    include 'header.php';
?>

<!-- Content Row -->
<div class="well card-1">
     <div flex-offset="20" flex="66" class="signupCard" hide-xs show-gt-lg>
     <md-card md-theme="{{ showDarkTheme ? 'dark-grey' : 'default' }}" md-theme-watch flex>
       <md-toolbar>
         <h1 class="md-headline infoHeader">Sign Up for Code Cafe!</h1>
       </md-toolbar>
       <md-card-content>
         <h1 class="md-subhead"> Enter your name: </h1>
         <md-input-container style="width:50%;">
          <label>Name</label>
            <input required ng-model="user.name" type="text">
            <div ng-messages="user.name.$error">
            <div ng-message="required">This is required.</div>
            </div>
          </md-input-container>

          <h1 class="md-subhead"> Major </h1>
          <md-input-container style="width:50%;">
           <label>Major</label>
             <input required ng-model="user.major" type="text">
             <div ng-messages="user.major.$error">
             <div ng-message="required">This is required.</div>
             </div>
           </md-input-container>

           <h1 class="md-subhead"> Email </h1>
           <md-input-container style="width:50%;">
            <label>Email</label>
              <input required ng-model="user.email" type="email">
              <div ng-messages="user.email.$error">
              <div ng-message="required">This is required.</div>
              </div>
            </md-input-container>

            <h1 class="md-subhead"> Sex </h1>
            <md-radio-group ng-model="user.sex">
              <md-radio-button value="1" class="md-primary">Male</md-radio-button>
              <md-radio-button value="2" class="md-primary">Female</md-radio-button>
              <md-input-container>
                <label>Other</label>
                <input ng-model="genText" class="md-primary"></md-radio-button>
              </md-input-container>
            </md-radio-group>

            <h1 class="md-subhead"> Programming Experience </h1>
            <md-radio-group ng-model="user.pxp">

              <md-radio-button value="1" class="md-primary">Extremely Beginner</md-radio-button>
              <md-radio-button value="2" class="md-primary">Moderately Beginner</md-radio-button>
              <md-radio-button value="3" class="md-primary">Intermediate</md-radio-button>
              <md-radio-button value="4" class="md-primary">Moderatly Pro</md-radio-button>
              <md-radio-button value="5" class="md-primary">Extremely Pro</md-radio-button>

            </md-radio-group>

            <h1 class="md-subhead"> Are you a Purdue IEEE Member? </h1>
            <md-radio-group ng-model="user.ieeemem">

              <md-radio-button value="1" class="md-primary">Yes</md-radio-button>
              <md-radio-button value="0" class="md-primary">No</md-radio-button>

            </md-radio-group>

            <md-button class="md-primary md-raised" ng-click="submitSignup($event)"> Submit </md-button>
       </md-card-content>
     </md-card>
   </div>
   

</div>
<!-- /.well -->

<?php include '../footer.php';?>
