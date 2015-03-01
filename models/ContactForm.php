<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $message;
//    public $verifyCode;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'message'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
//            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param  string  $email the target email address
     * @return boolean whether the model passes validation
     */
    public function sendMail()
    {
        \Yii::$app->response->format = 'json';
        $response = new \stdClass();

        if ($this->validate()) {
            $mailer = \Yii::$app->mailer->compose('contact', ['data' => $this])
               ->setFrom([$this->email => $this->name])
               ->setTo(\Yii::$app->params['contactEmail'])
               ->setReplyTo($this->email)
               ->setSubject($this->subject);
            if($mailer->send()){
                $response->success = true;
            }else{
                $response->success = false;
            }
        } else {
            $response->success = false;
            $response->errors = $this->getErrors();
        }
        return $response;
    }
}
