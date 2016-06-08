/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



    function getSelectionText() {

          var voice = '';
          var text = "";
          if (window.getSelection) {
              text = window.getSelection().toString();
          } else if (document.selection && document.selection.type != "Control") {
              text = document.selection.createRange().text;
          }
          return text;
        }

      $('a').keyup(function (e) {
          console.log('keyup called');
          var code = e.keyCode || e.which;
          if (code == '9') {
              responsiveVoice.cancel();
              responsiveVoice.speak('Link  ' + $(':focus').text(), "Brazilian Portuguese Female");

          }
      });

      $('a').mouseenter(function(){
          responsiveVoice.cancel();
          responsiveVoice.speak($(this).text(), "Brazilian Portuguese Female");
      });

      /*deleta codigo abaixo*/
      $('a').mouseenter(function () {
          responsiveVoice.cancel();
          //responsiveVoice.speak($(this).text());
          responsiveVoice.speak($(this).text(), "Brazilian Portuguese Female");
      });
      /*deleta codigo abaixo*/

      $('button').mouseenter(function () {
          responsiveVoice.cancel();
          responsiveVoice.speak($(this).text(), "Brazilian Portuguese Female");
      });
