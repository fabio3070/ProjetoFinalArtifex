<body class="body_chat">
  <script>
    var IDSessao = "<?php echo $_SESSION['UtilID'] ?>";
  </script>

  <div class="chat_body">
    <!--MODAL DE ELIMINAR MENSAGEM-->
    <div class="chat_eliminatemodal">
      <div class="chat_eliminatemodal_titulo"></div>
      <div class="chat_eliminatemodal_texto"></div>
      <div class="chat_eliminatemodal_btns">
        <div></div>
        <div></div>
      </div>
    </div>



      <div class="chat_users">

        <!--SEARCHBOX-->
        <div class="chat_users_settings">

            <div class="chat_user_settings_search_padding">
                <div class="chat_user_settings_search" id="chat_user_settings_search">
                    <input type="text" id="PesquisaNome" placeholder="Insira um Utilizador...">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>
        <!--FINAL SEARCHBOX-->

        <!--RESULTADO DAS PESQUISAS-->
        <div class="chat_resultados_pesquisa" id="chat_resultados_pesquisa">
        </div>
            <!--FINAL DAS PESQUISAS-->

          <div class="chat_users_display" id="chat_users_display">
              <!--MENSAGEM DE UM UTILIZADOR-->

              <!--FINAL-->
          </div>

          <script>
            todasMensagens();
          </script>

      </div>
      <div class="chat_display" id="chat_display">
          <div class="chat_display_user">
              <div class="chat_display_user_profile">
                  <div class="chat_display_user_img" id="chat_display_user_img"> <img src="imagens/Icones/icons8-male-user-26.png"> </div>
                  <div class="chat_display_userinfo">
                    <div class="chat_display_user_name" id="chat_display_user_name"></div>
                    <div class="chat_display_user_username" id="chat_display_user_username">@gabsonthebeat</div>
                  </div>
              </div>
          </div>

          <div class="chat_display_messages" id="chat_display_messages">

          </div><!--FINAL DO DISPLAY DAS MENSAGENS-->

          <div class="chat_display_text">
              <div class="chat_display_text_msg" >
                <form>
                  <input type="text" id="tb_messagem" autofocus autocomplete="off" placeholder="Escreva a sua mensagem...">
                  <button type="button" class="chat_display_text_send" value="Enviar"><i class="fas fa-paper-plane"></i></button>
                </form>
              </div>

          </div>
      </div>
  <div>
</body>
