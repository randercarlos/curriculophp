<?php

/**
 * Description of ConexaoDB
 *
 * @author RANDER
 */
class ConexaoDB {
    
    /*  
     * Atributo estático para instância do PDO  
     */  
    private static $pdo;

    /*  
     * Escondendo o construtor da classe  
     */ 
    private function __construct() {  
      //  
    } 

    /*  
     * Método estático para retornar uma conexão válida  
     * Verifica se já existe uma instância da conexão, caso não, configura uma nova conexão  
     */  
    public static function getInstance() {  
        if (!isset(self::$pdo)) {  
            try {
                self::$pdo = new PDO("mysql:host=" . HOST . "; dbname=" . 
                        DBNAME . "; charset=" . CHARSET . ";", USER, PASSWORD);  
            } catch (PDOException $e) {  
                print "Erro: " . $e->getMessage();  
            }  
        }  
        return self::$pdo;  
    }  
 }
