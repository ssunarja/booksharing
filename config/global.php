<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 8/6/2016
 * Time: 12:46 PM
 */

define('LANGUAGE_DEFAULT','DE');
define('LANGUAGE_DE','DE');
define('LANGUAGE_EN','EN');
define('LANGUAGE_ID','ID');

define('MAX_BORROWED_BOOK',1);

define('BOOKS_VIEW_LIMIT_DEFAULT',10);
define('BOOKS_VIEW_LIMIT_LATEST',4);
define('BOOKS_VIEW_LIMIT_RECOMENDED',6);
define('BOOKS_VIEW_LIMIT_LIST',50);

define('NOTIFICATIONS_VIEW_LIMIT_HEADER',5);

define('BOOK_STATUS_NOT_AVAILABLE','NOT_AVAILABLE');
define('BOOK_STATUS_PENDING_ADMIN_APPROVAL','PENDING_ADMIN_APPROVAL');
define('BOOK_STATUS_RESERVED','RESERVED');
define('BOOK_STATUS_BORROWED','BORROWED');
define('BOOK_STATUS_AVAILABLE','AVAILABLE');

define('LOAN_STATUS_REQUESTED','REQUESTED');
define('LOAN_STATUS_BORROWED','BORROWED');
define('LOAN_STATUS_CANCELED','CANCELED');
define('LOAN_STATUS_REJECTED','REJECTED');
define('LOAN_STATUS_RETURNED','RETURNED');

define('NOTIFICATION_TYPE_BORROW_REQUEST','BORROW_REQUEST');
define('NOTIFICATION_TYPE_BORROW_REJECT','BORROW_REJECT');
define('NOTIFICATION_TYPE_BORROW_ACCEPT','BORROW_ACCEPT');
define('NOTIFICATION_TYPE_BORROW_STATUS','BORROW_STATUS');
define('NOTIFICATION_TYPE_SYSTEM','SYSTEM');
define('NOTIFICATION_TYPE_USER_TO_USER','USER_TO_USER');

define('NOTIFICATION_STATUS_NEW','NEW');
define('NOTIFICATION_STATUS_READ','READ');
define('NOTIFICATION_STATUS_DELETED','DELETED');

define('USER_STATUS_NOT_VERIFIED','NOT_VERIFIED');
define('USER_STATUS_ACTIVE','ACTIVE');
define('USER_STATUS_SUSPENDED','SUSPENDED');
define('USER_STATUS_DELETED','DELETED');