<?php
return array("#tableName"=>"costumors_payments","#primaryKeys"=>array("transactionid"=>"transactionid"),"#manyToOne"=>array("payment","shipping"),"#fieldNames"=>array("transactionid"=>"transactionid","costumorid"=>"costumorid","amount"=>"amount","tax_total"=>"tax_total","currencycode"=>"currencycode","transactioncode"=>"transactioncode","transactiondate"=>"transactiondate","payment"=>"paymentmethod","paymenttransaction"=>"paymenttransaction","shipping"=>"shippingid","refunds"=>"refunds"),"#memberNames"=>array("transactionid"=>"transactionid","costumorid"=>"costumorid","amount"=>"amount","tax_total"=>"tax_total","currencycode"=>"currencycode","transactioncode"=>"transactioncode","transactiondate"=>"transactiondate","paymentmethod"=>"payment","paymenttransaction"=>"paymenttransaction","shippingid"=>"shipping","refunds"=>"refunds"),"#fieldTypes"=>array("transactionid"=>"mixed","costumorid"=>"mixed","amount"=>"mixed","tax_total"=>"mixed","currencycode"=>"mixed","transactioncode"=>"mixed","transactiondate"=>"mixed","payment"=>false,"paymenttransaction"=>"mixed","shipping"=>false,"refunds"=>"mixed"),"#nullable"=>array(),"#notSerializable"=>array("payment","shipping","refunds"),"#transformers"=>array(),"#accessors"=>array("transactionid"=>"setTransactionid","costumorid"=>"setCostumorid","amount"=>"setAmount","tax_total"=>"setTax_total","currencycode"=>"setCurrencycode","transactioncode"=>"setTransactioncode","transactiondate"=>"setTransactiondate","paymentmethod"=>"setPayment","paymenttransaction"=>"setPaymenttransaction","shippingid"=>"setShipping","refunds"=>"setRefunds"),"#oneToMany"=>array("refunds"=>array("mappedBy"=>"payment_transaction","className"=>"models\\Refund")),"#joinColumn"=>array("payment"=>array("className"=>"models\\Payment","name"=>"paymentmethod","nullable"=>false),"shipping"=>array("className"=>"models\\Shipping","name"=>"shippingid","nullable"=>false)),"#invertedJoinColumn"=>array("paymentmethod"=>array("member"=>"payment","className"=>"models\\Payment"),"shippingid"=>array("member"=>"shipping","className"=>"models\\Shipping")));