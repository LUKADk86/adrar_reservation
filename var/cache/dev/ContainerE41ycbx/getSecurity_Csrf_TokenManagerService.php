<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'security.csrf.token_manager' shared service.

require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Csrf/TokenGenerator/TokenGeneratorInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Csrf/TokenGenerator/UriSafeTokenGenerator.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Csrf/TokenStorage/TokenStorageInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Csrf/TokenStorage/SessionTokenStorage.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Csrf/CsrfTokenManagerInterface.php';
require_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Csrf/CsrfTokenManager.php';

return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load(__DIR__.'/getSessionService.php')) && false ?: '_'}), ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'});
