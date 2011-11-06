/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function addAnItem(target, source){
    newnode = document.createElement("div");
    newnode.innerHTML =document.getElementById(source).getAttribute('data-prototype').replace(/\$\$name\$\$/gi, document.getElementById(source).childNodes.length);
    document.getElementById(source).appendChild(newnode);
}
