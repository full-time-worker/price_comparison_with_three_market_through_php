$(document).ready(function () {
    let mOne = document.querySelector('#market_one');
    let mTwo = document.querySelector('#market_two');
    let mThree = document.querySelector('#market_three');

    let oneBtn = document.querySelectorAll('#market_one button');
    let twoBtn = document.querySelectorAll('#market_two button');
    let threeBtn = document.querySelectorAll('#market_three button');
    let dl = document.querySelectorAll('.dl');
    
	

    let checkrow = document.querySelectorAll('#market_one tbody tr');
    let numRow = checkrow.length-1;

    if(numRow == 0){
        window.location.href = "index.php";
    }

    checkandupdate(oneBtn);
    checkandupdate(twoBtn);
    checkandupdate(threeBtn);


   function checkandupdate(button){
    for (let i = 0; i < button.length; i++) {
        button[i].addEventListener('click', function () {

                 let idOne = oneBtn[i].parentElement.parentElement.children[2].getAttribute('value');  
                 let idTwo = twoBtn[i].parentElement.parentElement.children[2].getAttribute('value');  
                 let idThree = threeBtn[i].parentElement.parentElement.children[2].getAttribute('value');  
						console.log(idOne);
                let totalOne= oneBtn[i].parentElement.parentElement.parentElement.lastElementChild.lastElementChild;
                let totalTwo= twoBtn[i].parentElement.parentElement.parentElement.lastElementChild.lastElementChild;
                let totalThree= threeBtn[i].parentElement.parentElement.parentElement.lastElementChild.lastElementChild;


                totalValue_one = totalOne.innerText;
                totalValue_two = totalTwo.innerText;
                totalValue_three = totalThree.innerText;
				dl[i].remove()

                oneBtn[i].parentElement.parentElement.remove();
                twoBtn[i].parentElement.parentElement.remove();
                threeBtn[i].parentElement.parentElement.remove();
                
                
                totalOne.innerText = eval(totalValue_one - idOne) ;
				var test = eval(totalValue_one - idOne);
				
                totalTwo.innerText = eval(totalValue_two - idTwo) ;
                totalThree.innerText = eval(totalValue_three - idThree) ;

                // ajax

                $.post('removedata.php',{price_id: idOne});

                if(numRow < 2){
                    window.location.href = "index.php";
                }
        });
    }
   }
         


});