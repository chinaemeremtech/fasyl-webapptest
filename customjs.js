/* Make sure document is ready */
$(document).ready(function() {

  // COUNT VOWELS & CONSONANTS
  $("#btnVowConso").click(function(e){
    e.preventDefault();
    // Get form field value
    var vowlVar = $.trim($("#1kChar").val());
    // Define vowlList
    vowlList = "^[aeiuoAEIOU]+$";
    consoList = "^[qwrtpsdfghjklzxcvbnmQWRTPSDFGHJKLZXCVBNM]+$";

    // Define vowlCount
    var vowlCount = 0;
    var consoCount = 0;

    // Loop through each character in form value
    for (var x = 0; x < vowlVar.length; x++) {
      // Define currChar
      var currChar = (vowlVar[x]);
      // Check if vowels match using regex
      if (currChar.match(vowlList)) {
        // Increment vowlCount by 1
        vowlCount++;
      } else if (currChar.match(consoList)) {
        // Increment consoCount by 1
        consoCount++;
      }// close if
    }// close for loop 

    // Display result
    $("#countVowConsoRes").html('<strong>Vowels: '+vowlCount+' - Consonants: '+consoCount+'</strong>');
  });


  // COUNT CONSONANTS
  $("#btnConsonants").click(function(e){
    e.preventDefault();
    // Get form field value
    var consoVar = $("#1kChar").val();
    // Number of characters after removing beginning and trailing spaces
    var consoLenVar = consoVar.replace(/ /g,'').length;
    // Display result
    $("#countConsRes").html('<strong>Consonants: '+consoLenVar+'</strong>');
  });
  

  // COUNT WORDS
  $("#btnWords").click(function(e){
    e.preventDefault();
    // Get form field value
    var wordsVar = $.trim($("#1kChar").val()).split(" ").filter(function(v){return v!==''});
    // Get length
    var wordsResVar = wordsVar.length;
    // Display result
    $("#countWordRes").html('<strong>Words: '+wordsResVar+'</strong>');
  });


  // COUNT CHARACTERS
  $("#btnCharacters").click(function(e){
    e.preventDefault();
    // Get form field value
    var charVar = $("#1kChar").val();
    // Get length after removing beginning and trailing spaces
    var charLenVar = charVar.replace(/ /g,'').length;
    // Display result
    $("#countCharRes").html('<strong>Characters: '+charLenVar+'</strong>');
  });
  


}); // close isready document
