<?php

Class Account{

Private $name;

Private $number;

Private $balannce;

Public function get_name()

{

Return $this->name;

}

Public function get_number()

{

Return $this->number;

}

Function_construct($name, $number)

{

$this->name=$name;

$this->number=$number;

$this->balance=0;

}

Public function deposit($amount)

{

$this->balance=$this->balance+$amount;

}

Public function withdraw($amount)

{

If($this->balance-$amount>=0)

$this->balance=$this->balance-$amount;

Return withdrawn;

}

Else

{

Return Insufficient balance;

}

}

<html>

<head>

<meta charset=UTF-8>

<title></title>

</head>

<body>

<form>


Amount :<input type=text name=amounttext><br/>

<input type=submit name=depositButton   value=Deposite ><br/>

<input type=submit name=WithdrawButton   value=Withdraw ><br/>


</form>

<?php>

Require _once Account.php;

Session_start();

If(isset($_GET[ CreateButton    ]))

{

$account=new Account(($_GET[ CustomerNameText ], ($_GET[AccountNo ] ))

Session_start();

$_SESSION[an_account]=$account;

Echo AccountCreated;

}

If(isset($_GET[ DepositButton    ]))

{

$account=$_SESSION(an account[;

$account->deposite($_GET[amountText]);

$_SESSION[an account]=$account;

}

If(isset($_GET[ WithdrawButton    ]))

{

$account=$_SESSION(an account[;

Echo $account->Withdraw($_GET[amountText]);

$_SESSION[an account]=$account;

}

If(isset($_GET[ ShowReportButton    ]))

{

$account=$_SESSION(an account[;

Echo $account->get_name().<br/>;

Echo $account->get_number().<br/>;

Echo $account->get_balance().<br/>;

}

}

}
