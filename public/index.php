<?php declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Siler\Route;
use SilerExt\Exception\{NotFoundException, ValidationException, DbException, JwtException, AccessDeniedException};


try {
    SilerExt\Config\initConfig(__DIR__ . '/../config/config.php');
    // Enable CORS
    // SilerExt\Security\enableCors();

    // routing
    $path = __DIR__ . '/../http';
    Route\get('/api/hello/{name}', $path . '/api/hello.get.php');

    // 404 not found
    if (!Route\did_match()) {
        throw new NotFoundException('route not found');
    }
} catch (NotFoundException $e) {
    return json(['reason' => $e->getMessage()], 404);
} catch (ValidationException $e) {
    return json(['reason' => $e->getMessage(), 'errors' => $e->getErrors()], 400);
} catch (DbException $e) {
    return json(['reason' => $e->getMessage(), 'errors' => $e->getErrors()], 400);
} catch (JwtException $e) {
    return json(['reason' => $e->getMessage()], 401);
} catch (AccessDeniedException $e) {
    return json(['reason' => $e->getMessage()], 403);
} catch (\Exception $e) {
    return json(['reason' => $e->getMessage()], 500);
}

// finish request + execute background tasks
SilerExt\Http\finishRequest();
