<!DOCTYPE html>
<head>
 <meta charset=UTF-8" />
 
 <title>QUIZ</title>
 
 <link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
<script src="script.js"></script>
 <div id="page-wrap">
 
 <h1>ТЕСТ ТЕСТОВЫЙ</h1>
 
 <form action="result.php" method="post" id="quiz">
 
            
            
                <li id ="1" style="display: inline-block">
                
                    <img src = "PHOTO_MEN\M_K_s_drwal_0340.jpg" alt = "sadasd">
                    <div class="button-margin">
                    <div class="form_radio_btn">
                        <input type="radio" onclick="hide(1)" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">+</label>
                    </div>
                    
                    <div class="form_radio_btn">
                        <input type="radio" onclick="hide(1)" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">0</label>
                    </div>
                    
                    <div class="form_radio_btn">
                        <input type="radio" onclick="hide(1)" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">-</label>
                        </div>
                    </div>                 
                </li>
                
                <li id ="2" style="display:none">
                
                    <img src = "PHOTO_MEN\M_Z_v_zlotnik_3926.jpg" alt = "sadasd">
                    <div class="button-margin">
                    <div class="form_radio_btn">
                        <input type="radio" onclick="hide(2)" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">+</label>
                    </div>
                    
                    <div class="form_radio_btn">
                        <input type="radio" onclick="hide(2)" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">0</label>
                    </div>
                    
                    <div class="form_radio_btn">
                        <input type="radio" onclick="hide(2)" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">-</label>
                    </div>
                    </div>
                
                </li>
                
                <li id ="3" style="display:none" >
                
                   <img src = "PHOTO_MEN\M_M_s_ogrodnik_6097.jpg" alt = "sadasd">
                   <div class="button-margin">
                    <div class="form_radio_btn">
                        <input type="radio" onclick="hide(3)" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">+</label>
                    </div>
                    
                    <div class="form_radio_btn">
                        <input type="radio" onclick="hide(3)" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">0</label>
                    </div class="form_radio_btn">
                    
                    <div class="form_radio_btn">
                        <input type="radio" onclick="hide(3)"name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">-</label>
                    </div>
                    </div>
                </li>
                
                <li id ="4" style="display:none">
                
                    <img src = "PHOTO_MEN\M_V'_s_kierownikBudowy_4274.jpg" alt = "sadasd">
                    <div class="button-margin">
                    <div class="form_radio_btn">
                        <input type="radio" onclick="hide(4)" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">+</label>
                    </div>
                    
                    <div class="form_radio_btn">
                        <input type="radio" onclick="hide(4)" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">0</label>
                    </div>
                    
                    <div class="form_radio_btn">
                        <input type="radio" onclick="hide(4)" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">-</label>
                    </div>
                    </div>
                </li>
                
                <li id ="5" style="display:none">
                
                    <img src = "PHOTO_MEN\M_S_o_przewodnik_9369.jpg" alt = "sadasd">
                    <div class="button-margin">
                    <div class="form_radio_btn">
                        <input type="radio" onclick="hide(5)" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">+</label>
                    </div>
                    
                    <div class="form_radio_btn">
                        <input type="radio" onclick="hide(5)" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">0</label>
                    </div>
                    
                    <div class="form_radio_btn" >
                        <input type="radio" onclick="hide(5)" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">-</label>
                    </div>
                    </div>

                </li>
            
            
            
            <input class="button24" id= "Submit" type="submit" value="Проверить" style="display:none"/>
 
 </form>
 
 </div>
 
 
</body>
 
</html>