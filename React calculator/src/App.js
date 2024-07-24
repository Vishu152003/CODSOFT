import React, { useState } from 'react';

import './App.css';

const App=()=> {
const[result,setResult] = useState("");

const handlerClick = (e)=>{
  setResult(result.concat(e.target.name));
}
const clear=()=>{
  setResult("");
}
const backspace=()=>{
setResult(result.slice(0, -1));
}
const calculate=()=>{
  try{
    setResult(eval(result).toString());

  }catch(err){
    setResult("error")
    
  }

  
};
  return (
   <>
   <div className="container">
   <form>
    <input type="text" value={result} />
</form>
    <div className='keypad'>
       <button className="highlight" id="clear" onClick={clear}>Clear</button>
       <button className="highlight"  id='backspace' onClick={backspace}>C</button>
       <button className="highlight" name="/" onClick={handlerClick}>&divide;</button>
       <button name="7" onClick={handlerClick}>7</button>
       <button name="8" onClick={handlerClick} >8</button>
       <button name="9" onClick={handlerClick}>9</button>
       <button  className='highlight' name="*" onClick={handlerClick}>&times;</button>
       <button name="4" onClick={handlerClick}>4</button>  
       <button name="5" onClick={handlerClick}>5</button>
       <button name="6" onClick={handlerClick}>6</button>
       <button className='highlight' name="-" onClick={handlerClick}>&ndash;</button>
       <button name="1" onClick={handlerClick}>1</button>
       <button name="2" onClick={handlerClick}>2</button>
       <button name="3" onClick={handlerClick}>3</button>
       <button className='highlight' name="+" onClick={handlerClick}>+</button>
       <button name="0" onClick={handlerClick}>0</button>
       <button name="." onClick={handlerClick}>.</button>
       <button className='highlight' onClick={calculate} id="result">=</button>
       </div>
       </div>   
   
   </>
       
  );
};

export default App;
