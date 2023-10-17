<?php

require_once 'EmailError.php';
class Email
{
    public function __construct(
        private string $email
    ) {
        if(empty($this->email)) {
            throw new InvalidArgumentException(code: EmailError::EMPTY);
        }
        if(!$this->isValid()) {
            throw new InvalidArgumentException(code:EmailError::INVALID);
        }
    }


    private function isValid(): bool
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }
    public function getEmail(): string
    {
        return $this->email;
    }

    public function getDomain(): string
    {
        // strstr 函数用于查找存储在 $this->email 中的电子邮件地址中 @ 字符的第一个出现位置。它返回一个从 @ 字符开始到字符串末尾的子字符串。例如，如果 $this->email 是 "user@example.com"，这部分将返回 "@example.com"。
        // ltrim 函数用于从 strstr 返回的字符串中删除前导（左侧）的 @ 字符。在这种情况下，它将从域部分的开头删除 @ 字符，从而得到 "example.com"。
        return ltrim(strstr($this->email, '@'), '@');
    }
}
