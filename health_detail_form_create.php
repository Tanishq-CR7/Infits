<?php require('constant/config.php');
session_start();
if(isset($_POST['saveForm'])){
  global $conn;
  $form  = $_POST['questions'];
  echo $form;
  $count =$_POST['queCount'];
  $formName = $_POST['formName'];
  if(isset($_GET['form_id'])){
    $query = "UPDATE `dietitian_forms` SET `form_name`='$formName',`total_que`='$count',`dietitian_id`='{$_SESSION['dietitian_id']}',`dietitianuserID`='{$_SESSION['dietitianuserID']}',`form_data`='$form' WHERE form_id= {$_GET['form_id']}";
    echo $query;
    $conn->query($query);
    $form_id = $_GET['form_id'];
  }else{

    $query = "INSERT INTO `dietitian_forms`(`form_name`, `total_que`, `dietitian_id`, `dietitianuserID`, `form_data`) VALUES ('$formName','$count','{$_SESSION['dietitian_id']}','{$_SESSION['dietitianuserID']}','$form')";
    $conn->query($query);
    $query = "SELECT * FROM dietitian_forms WHERE dietitian_id = '{$_SESSION['dietitian_id']}' ORDER BY form_id DESC LIMIT 1";
    $result = $conn->query($query);
    $form_id = $result->fetch_assoc()['form_id'];
  }

  header("Location:health_detail_form_create.php?form_id=$form_id");
}
if(isset($_POST['addClient'])){
  global $conn;
  $clientId  = $_POST['clientId'];
  $userId  = $_POST['userId'];
  if(isset($_GET['form_id'])){
    $query = "INSERT INTO `client_forms_docs`(`client_id`, `clientuserID`, `dietitian_id`, `dietitianuserID`, `form_id`) VALUES ('$clientId','$userId','{$_SESSION['dietitian_id']}','{$_SESSION['dietitianuserID']}','{$_GET['form_id']}')";
    $conn->query($query);
  }
}
if(isset($_POST['removeClient'])){
  global $conn;
  $clientId  = $_POST['clientId'];
  $userId  = $_POST['userId'];
  if(isset($_GET['form_id'])){
    $query = "DELETE FROM `client_forms_docs` WHERE client_id = '$clientId' AND form_id = '{$_GET['form_id']}'";
    $conn->query($query);
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits | Health Details</title>
    <?php require('constant/head.php');?>
    <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "NATS" !important;
}

.content {
  display: flex;
  align-items: center;
  flex-direction: column;
  padding: 20px 16px;
}
.content .heading-box {
  height: 70px;
  width: 94%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 8px;
}
.content .heading-box h1 {
  font-size: 2.3rem;
  font-weight: 400;
}
.content .heading-box button#save {
  background-color: #6883fb;
  color: #ffffff;
  width: 120px;
  font-size: 1.5rem;
  padding: 5px 20px;
  border: none;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
}
.content .flex-container {
  position: relative;
  display: flex;
  justify-content: space-around;
  width: 100%;
  margin-top: 30px;
}
.content .flex-container .form-container {
  width: 60%;
  padding: 0px 20px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
.content .flex-container .form-container .form-title {
  width: 100%;
  display: flex;
  align-items: center;
  padding: 10px 20px;
  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25);
  border-radius: 15px;
}
.content .flex-container .form-container .form-title input#formName {
  width: 100%;
  padding: 10px 20px;
  border: none;
  font-size: 1.6rem;
}
.content .flex-container .form-container .form-title input#formName:focus {
  outline: none;
}

.content .flex-container #popup .controller-box button#popupSave:hover {
  background-color: #4d6cf7;
  color: #ffffff;
}
.content .flex-container .share-box {
  display: flex;
  align-items: center;
  flex-direction: column;
  height: 600px;
  width: 30%;
  max-width: 400px;
  min-width: 350px;
  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25);
  padding: 15px;
  border-radius: 15px;
}
.content .flex-container .share-box h3 {
  font-size: 1.8rem;
}
.content .flex-container .share-box .search-box1{
  width: 100%;
  display: flex;
  align-items: center;
  font-size: 1.6rem;
  padding: 5px 15px;
  margin-top: 10px;
  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25);
  border-radius: 15px;
}
.content .flex-container .share-box .search-box1 img {
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
  margin-right: 10px;
}
.content .flex-container .share-box .search-box1 input#search {
  width: 100%;
  border: none;
  padding: 5px 5px;
}
.content .flex-container .share-box .search-box1 input#search:focus {
  outline: none;
}
.content .flex-container .share-box #selectedUser-box {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  width: 100%;
  padding-top: 20px;
  margin-top: 10px;
}
.content .flex-container .share-box #selectedUser-box .selectedUser {
  background-color: #EFF4FF;
  display: flex;
  align-items: center;
  width: -moz-fit-content;
  width: fit-content;
  padding: 5px 10px;
  border-radius: 15px;
}
.content .flex-container .share-box #selectedUser-box .selectedUser p.userName {
  margin: 0;
  color: #6883fb;
}
.content .flex-container .share-box #selectedUser-box .selectedUser img {
  margin-left: 20px;
  -webkit-user-select: none;
     -moz-user-select: none;
          user-select: none;
  cursor: pointer;
}
.content .flex-container .share-box ul#usersList {
  display: flex;
  flex-direction: column;
  gap: 20px;
  height: 300px;
  width: 100%;
  margin-top: 20px;
  overflow-y: auto;
}
.content .flex-container .share-box ul#usersList li {
  display: flex;
  align-items: center;
  font-size: 1.8rem;
  position: relative;
}
.content .flex-container .share-box ul#usersList li input.checkBox {
  display: flex;
  align-items: center;
  justify-content: center;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: 2px solid #6883fb;
  height: 20px;
  width: 20px;
  cursor: pointer;
  border-radius: 5px;
}
.content .flex-container .share-box ul#usersList li input.checkBox::after {
  content: "\f00c";
  font-size: 18px;
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  color: #ffffff;
  display: none;
}
.content .flex-container .share-box ul#usersList li input.checkBox:checked {
  background-color: #6883fb;
}
.content .flex-container .share-box ul#usersList li input.checkBox:checked::after {
  display: block;
}
.content .flex-container .share-box ul#usersList li label.userName {
  color: #6883fb;
  margin: 0 0 0 30px;
  cursor: pointer;
}/*# sourceMappingURL=health_detail_form_create.css.map */
/* styles for que sec  */
#questions-container div{
        padding: 10px 30px;
    box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25);
    border-radius: 15px;
    margin-bottom: 2rem;
    }
    #questions-container input{
        margin: 0;
    color: #D6D6D6;
    font-size: 1.6rem;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    margin-right: 1rem;
    
    }
    #questions-container input::placeholder{
        color: #D6D6D6; 
    }
    #questions-container span{
        padding: 0rem 0.5rem;
    }
    h3{
        font-size: 2rem;
    }
    label {
      display: block;
      /* margin-top: 10px; */
      font-size: 1.6rem;
      width: 100%;
    }
    input[type="text"] {
      /* width: 300px; */
      width: 85%;
      border: none;
    }
    input[type="radio"],
    input[type="checkbox"] {
      margin-right: 5px;
    }
    #questions-container {
      margin-top: 20px;
      width: 100%;
    }
    #save-button,
    #cancel-button {
      margin-top: 20px;
    }
    .popup-container {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
    }
    #popup-question::placeholder{
        font-size: 1.6rem;
    }
    #popup-question{
        border: none;
    width: 90%;
    font-size: 1.6rem;
    padding: 10px 35px;
    box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25);
    border-radius: 15px;
    }
    .popup {
      background-color: #fff;
      box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25);
    border-radius: 15px;
    height: 500px;
    width:50%;
      padding: 20px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: flex;
      align-items: center;
      flex-direction: column;
    }
    .edit-icon,
    .delete-icon {
      cursor: pointer;
      font-size: 1.5rem;
    }
    #popup-answer-type{
      flex-wrap: wrap;
        width: 90%;
    display: flex;
    align-items: center;
    justify-content: space-around;
    margin-top: 30px;
    }
    .radio-box{
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1rem;
    }
    #popup-cancel-button{
        border: 2px solid #6883fb;
    background-color: #ffffff;
    color: #6883fb;
    padding: 5px 20px;
    border-radius: 10px;
    font-size: 1.6rem;
    }
    #popup-save-button{
        border: 2px solid #6883fb;
    background-color: #6883fb;
    color: #ffffff;
    padding: 5px 20px;
    border-radius: 10px;
    font-size: 1.6rem;
    }
    #add-question-button{
        border: 2px solid #6883fb;
    background-color: #ffffff;
    color: #6883fb;
    height: 60px;
    width: 200px;
    font-size: 1.6rem;
    margin-top: 40px;
    border-radius: 15px;
    transition: all 0.3s ease;
    -webkit-transition: all 0.3s ease;
    }
    @media only screen 
  and (max-device-width: 1200px) {
 .flex-container{
  flex-direction: column !important;
 }
 .content .flex-container .form-container {
    width: 100%;
    }
    .content .flex-container .share-box {
      margin: 2rem 0rem;
      align-self: center;
    }
  }
  @media only screen 
  and (max-device-width: 768px) {
    .content .flex-container .share-box {
      min-width:100%;
    }
    .content .heading-box h1 {
      font-size: 32px !important;
    }
  .popup{
    width: 95%;
  }
  }
    </style>

</head>

<body>
    <?php include 'navbar.php' ?>

    <div class="content">
        <div class="heading-box">
            <h1>Health Details Form</h1>
            <button id="save">Save</button>
        </div>

        <div class="flex-container">
            <div class="form-container">
            <?php if(isset($_GET['form_id'])): 
              $query = "SELECT * FROM dietitian_forms WHERE dietitian_id = '{$_SESSION['dietitian_id']}' AND form_id = '{$_GET['form_id']}'";
              $result = $conn->query($query); $form = $result->fetch_assoc(); endif;?>
                <div class="form-title">
                    <img src="<?=$DEFAULT_PATH?>assets/images/Form-Name.svg">
                    <input type="text" name="formName" id="formName" placeholder="Enter form name" value="<?php if(isset($form)){ echo $form['form_name'];}?>">
                </div>
        
    
                
                <div id="questions-container">
                  <?php if(isset($_GET['form_id'])): 
                     
                     $form = json_decode($form['form_data'],true);
                     foreach($form as $que): ?>
                <div data-question="<?=$que['que']?>"><label><?=$que['que']?></label><input type="<?=$que['ansType']?>" placeholder="Answer"><span class="edit-icon">✎</span><span class="delete-icon">🗑</span></div>
                  <?php endforeach; endif; ?>
                </div>
                <button type="button" id="add-question-button">Add Question</button>

              </form>
            
              <div class="popup-container">
                <div class="popup">
                  <h3>Add/Edit Question</h3>
                  <input type="text" placeholder="Type your Question here..." id="popup-question">
                  <div id="popup-answer-type">
                    <div class="radio-box">
                        <input type="radio" name="options" id="text" value="text" checked>
                        <label for="text">Text Field</label>
                    </div>
            
                    <div class="radio-box">
                        <input type="radio" name="options" id="checkbox" value="checkbox">
                        <label for="checkbox">Checkbox</label>
                    </div>
            
                    <div class="radio-box">
                        <input type="radio" name="options" id="radio" value="radio">
                        <label for="text">Radio Button</label>
                    </div>
                </div>
                   <div style="position: absolute;bottom: 0;right: 0;width: 250px;height: 70px;display: flex;justify-content: space-around;align-items: center;">
                  <button type="button" id="popup-save-button">Save</button>
                  <button type="button" id="popup-cancel-button">Cancel</button>
                </div>
                </div>
              </div>
                
            </div>
            

            <div class="share-box">
                <h3>Assign form to the clients</h3>

                <div class="search-box1">
                    <img src="<?=$DEFAULT_PATH?>assets/images/Search.svg">
                    <input type="search" name="search" id="search" placeholder="Search clients">
                </div>

                <div id="selectedUser-box">

                    <!-- Don't Add Elements here Elements are Added With JavaScript -->
                    <?php if(isset($_GET['form_id'])){ 
                      
                      $query = "SELECT * FROM `client_forms_docs` WHERE form_id = {$_GET['form_id']}";
                      $result = $conn->query($query);
                      if($result->num_rows>0){
                        while($client = $result->fetch_assoc()){?>
                      <div class="selectedUser">
                          <p class="userName"><?=$client['clientuserID']?></p>
                          <img data-userId="<?=$client['clientuserID']?>" data-clientId="<?=$client['client_id']?>" class="removeClient" src="<?=$DEFAULT_PATH?>assets/images/CrossX.svg" alt="Remove" title="Remove">
                      </div>

                    <?php } } } ?>

                </div>

                <ul id="usersList">

                    <!-- Don't Add Elements here Elements are Added With JavaScript -->

                    <?php $query= "SELECT * FROM addclient WHERE dietitianuserID = '{$_SESSION['dietitianuserID']}'";
                    $result = $conn->query($query);
                    if($result->num_rows>0){
                      while($client = $result->fetch_assoc()){?>
                        <li>
                          <input class="addClient" data-userId="<?=$client['clientuserID']?>" data-clientId="<?=$client['client_id']?>"  type="checkbox" name="checkBox" id="checkBox">
                          <label for="checkBox" class="userName"><?=$client['clientuserID']?></label>
                         </li>
                    <?php  } } ?>
                    
                </ul>
            </div>
        </div>
    </div>
    <?php require('constant/scripts.php');?>
    <script>
      var editedQuestionIndex = -1;
      
      // Function to open the popup window for adding/editing a question
      function openPopup(question, answerType, index) {
        var popupContainer = document.querySelector('.popup-container');
        popupContainer.style.display = 'block';
        
        document.getElementById('popup-question').value = question;
        document.getElementById('popup-answer-type').value = answerType;
        
        editedQuestionIndex = index;
      }
      
      // Function to close the popup window
      function closePopup() {
        var popupContainer = document.querySelector('.popup-container');
        popupContainer.style.display = 'none';
        
        editedQuestionIndex = -1;
      }
      
      // Function to add a question to the form
      function addQuestion(question, answerType) {
        var questionElement = document.createElement('div');
        questionElement.setAttribute('data-question',question);
        var labelElement = document.createElement('label');
        labelElement.textContent = question;
        questionElement.appendChild(labelElement);
        
        var inputElement;
        if (answerType === 'text') {
          inputElement = document.createElement('input');
          inputElement.type = 'text';
          inputElement.placeholder = 'Answer';
        } else if (answerType === 'radio') {
          inputElement = document.createElement('input');
          inputElement.type = 'radio';
        } else if (answerType === 'checkbox') {
          inputElement = document.createElement('input');
          inputElement.type = 'checkbox';
        }
        questionElement.appendChild(inputElement);
        var editIcon = document.createElement('span');
        editIcon.classList.add('edit-icon');
        editIcon.innerHTML = '&#9998;';
        editIcon.addEventListener('click', function() {
          openPopup(question, answerType, Array.from(questionElement.parentNode.children).indexOf(questionElement));
        });
        questionElement.appendChild(editIcon);
        
        var deleteIcon = document.createElement('span');
        deleteIcon.classList.add('delete-icon');
        deleteIcon.innerHTML = '&#128465;';
        deleteIcon.addEventListener('click', function() {
          questionElement.parentNode.removeChild(questionElement);
        });
        questionElement.appendChild(deleteIcon);
        
        var container = document.getElementById('questions-container');
        container.appendChild(questionElement);
      }
      
      // Event listener for "Add Question" button
      var addButton = document.getElementById('add-question-button');
      addButton.addEventListener('click', function() {
        openPopup('', 'text', -1);
      });
      
      // Event listener for popup "Save" button
      var popupSaveButton = document.getElementById('popup-save-button');
      popupSaveButton.addEventListener('click', function() {
        var question = document.getElementById('popup-question').value;
        var answerType = document.getElementById('popup-answer-type').value;
        
        if (editedQuestionIndex !== -1) {
          // Editing existing question
          var questionElement = document.getElementById('questions-container').children[editedQuestionIndex];
          var labelElement = questionElement.querySelector('label');
          labelElement.textContent = question;
          labelElement.parentElement.setAttribute('data-question',question);
          questionElement.querySelector('input').type = answerType;
        } else {
          // Adding new question
          if(question !==""){
            addQuestion(question, answerType);
          }else{
            return;
          }
        }
        
        closePopup();
      });
      
      // Event listener for popup "Cancel" button
      var popupCancelButton = document.getElementById('popup-cancel-button');
      popupCancelButton.addEventListener('click', closePopup);
  
      const saveForm =document.getElementById('save');
      const formName =document.getElementById('formName');
      saveForm.addEventListener('click',()=>{
        if(formName.value == ""){
          formName.style.border= '1px solid red';
        }else{
          formName.style.border= 'none';
        }
        const allQuestions =document.querySelectorAll('[data-question]');
        console.log(allQuestions);
        const formQuestions = [];
        let i=1;
        allQuestions.forEach(el => {
          const input = el.querySelector('input');
          const question = el.getAttribute('data-question');
          const queArray = {
            queId : i,
            que:question,
            ansType:input.type
          };
          formQuestions.push(queArray);
          i++;
        });

        console.log(formQuestions);
        const form = $('<form action="" method="post"></form>');
        form.append(`<input type="hidden" name="saveForm" value="true">`);
        form.append(`<input type="hidden" name="formName" value="${formName.value}">`);
        form.append(`<input type="hidden" name="questions" value='${JSON.stringify(formQuestions)}'>`);
        form.append(`<input type="hidden" name="queCount" value="${formQuestions.length}">`);
        $('body').append(form);
        form.submit();

      });


      const addClient =document.querySelectorAll('.addClient');
      addClient.forEach(client => {
        client.addEventListener('click',()=>{

          const clientId =client.getAttribute('data-clientId');
          const userId =client.getAttribute('data-userId');
          const form = $('<form action="" method="post"></form>');
          form.append(`<input type="hidden" name="addClient" value="true">`);
          form.append(`<input type="hidden" name="clientId" value='${clientId}'>`);
          form.append(`<input type="hidden" name="userId" value='${userId}'>`);
          $('body').append(form);
          form.submit();
        });
      });
      const removeClient =document.querySelectorAll('.removeClient');
      removeClient.forEach(client => {
        client.addEventListener('click',()=>{

          const clientId =client.getAttribute('data-clientId');
          const userId =client.getAttribute('data-userId');
          const form = $('<form action="" method="post"></form>');
          form.append(`<input type="hidden" name="removeClient" value="true">`);
          form.append(`<input type="hidden" name="clientId" value='${clientId}'>`);
          form.append(`<input type="hidden" name="userId" value='${userId}'>`);
          $('body').append(form);
          form.submit();
        });
      });
    </script>
    
</body>

</html>