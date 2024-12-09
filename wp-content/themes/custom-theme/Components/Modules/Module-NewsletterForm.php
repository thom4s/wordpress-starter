<!-- Begin Brevo Form -->
<!-- START - We recommend to place the below code in head tag of your website html  -->
<style>

  #sib-container input:-ms-input-placeholder {
    text-align: left;
    color: #c0ccda;
  }

  #sib-container input::placeholder {
    text-align: left;
    color: #c0ccda;
  }

  #sib-container textarea::placeholder {
    text-align: left;
    color: #c0ccda;
  }
  .sib-form {
    padding: 0 !important;
    font-family: inherit !important;
  }
  .sib-container--large {
    padding: 0 !important;
  }
  .sib-input input {
    background: none !important;
    margin: 0 !important;
    padding: 10px 0 !important;
    color: #9B9B9B !important;
  }
  .sib-form-block {
    padding: 0 !important;
  }
  .entry__field path {
    fill: #9B9B9B;
  }
</style>
<link rel="stylesheet" href="https://sibforms.com/forms/end-form/build/sib-styles.css">
<!--  END - We recommend to place the above code in head tag of your website html -->

<!-- START - We recommend to place the below code where you want the form in your website html  -->
<div class="sib-form" style="background-color: transparent;">
  <div id="sib-form-container" class="sib-form-container">
    <div id="error-message" class="sib-form-message-panel" style=" text-align:left; background-color:#ffeded; border-color:#ff4949;max-width:540px;">
      <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
        <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
          <path d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z" />
        </svg>
        <span class="sib-form-message-panel__inner-text">
          <?php pll_e("Nous n'avons pas pu confirmer votre inscription."); ?>        
        </span>
      </div>
    </div>
    <div></div>
    <div id="success-message" class="sib-form-message-panel" style=" text-align:left; background-color:#e7faf0;  border-color:#13ce66;max-width:540px;">
      <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
        <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
          <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z" />
        </svg>
        <span class="sib-form-message-panel__inner-text">
          <?php pll_e("Votre inscription est confirmée."); ?>        
        </span>
      </div>
    </div>
    <div></div>
    <div id="sib-container" class="sib-container--large sib-container--horizontal" style="text-align:right; background-color:transparent; max-width:540px; border-width:0px; border-color:#C0CCD9; border-style:solid; direction:ltr">
      <form id="sib-form" method="POST" action="https://299e5943.sibforms.com/serve/MUIFAFewKkW3-ffhLw8HGqskxzESa-LxqfYpYtFtlY0Dj6PfCTXOsGgmTjB8GAAI5T-2Oz_QIO77Jgex7Klg3fpHUtob4m304xIcF8H07Pi3MYGRRvEFkyu5STjSr-zFMjgUXftKzaeorIslWE8ikNxwS_Vob32zAKykyh7yX1RCM77pkUCFow7d-nTCyxnY5ZLyiYjOtrLtQEFd" data-type="subscription">
        <div>
          <div class="sib-form-block" style="padding: 0; text-align:left; color:#3C4858; background-color:transparent; text-align:left">
            <div class="sib-text-form-block">
              <p class="body -light">
              <?php pll_e("Recevez l’actualité de nos actions artistiques et culturelles"); ?>        
              </p>
            </div>
          </div>
        </div>
        <div>
          <div class="sib-input sib-form-block"style="padding: 0;">
            <div class="form__entry entry_block">
              <div class="form__label-row form__label-row--horizontal">

                <div class="entry__field" style="background: none; border: none; border-bottom: 1px solid #9B9B9B;">
                  <input class="input " type="text" id="EMAIL" name="EMAIL" autocomplete="off" placeholder="nom@domain.com" data-required="true" required />


                  <div>
                    <div class="sib-form-block" style="text-align: left">
                      <button class="sib-form-block__button sib-form-block__button-with-loader" style=" text-align:left; color:#FFFFFF; background: none; border-width:0px;" form="sib-form" type="submit">
                        <svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon" viewBox="0 0 512 512">
                          <path d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z" />
                        </svg>
                        <?php get_template_part('Components/Svgs/Svg', 'ArrowRight'); ?>
                      </button>
                    </div>
                  </div>

                </div>
              </div>

              <label class="entry__error entry__error--primary">
              </label>
            </div>
          </div>
        </div>
        

        <input type="text" name="email_address_check" value="" class="input--hidden">
        <input type="hidden" name="locale" value="fr">
      </form>
    </div>
  </div>
</div>
<!-- END - We recommend to place the below code where you want the form in your website html  -->




<!-- START - We recommend to place the below code in footer or bottom of your website html  -->
<script>
  window.REQUIRED_CODE_ERROR_MESSAGE = 'Veuillez choisir un code pays';
  window.LOCALE = 'fr';
  window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE = "Les informations que vous avez fournies ne sont pas valides. Veuillez vérifier le format du champ et réessayer.";

  window.REQUIRED_ERROR_MESSAGE = "Vous devez renseigner ce champ. ";

  window.GENERIC_INVALID_MESSAGE = "Les informations que vous avez fournies ne sont pas valides. Veuillez vérifier le format du champ et réessayer.";




  window.translation = {
    common: {
      selectedList: '{quantity} liste sélectionnée',
      selectedLists: '{quantity} listes sélectionnées'
    }
  };

  var AUTOHIDE = Boolean(0);
</script>
<script defer src="https://sibforms.com/forms/end-form/build/main.js"></script>


<!-- END - We recommend to place the above code in footer or bottom of your website html  -->
<!-- End Brevo Form -->