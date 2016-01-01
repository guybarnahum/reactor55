<?php namespace App\Repositories;

use App\Models\Person;
    
class PersonRepository {
    
    private function getUrl( $sn, $user )
    {
        switch( $sn ){
            case 'linkedin' : return 'https://www.linkedin.com/in/' . $user;
            case 'facebook' : return 'https://www.facebook.com/'    . $user;
        }
        
        return false;
    }
    
    public function all( $where = [] )
    {
        return $this->getPerson( $name = false, $where );
    }
    
    public function getPerson( $name = false, $where = [] )
    {
        if (env('APP_DEBUG', false)){
            $where_str = '';
            if ( !empty($where) ){
                
                $where_str = 'where ';
                foreach( $where as $field => $val ){
                    $where_str .= ',' . $field . '=' . $val;
                }
            }
            
            \Debugbar::info( 'PersonRepository::getPerson('       .
                             ' name:' . $name . ') ' . $where_str );
        }
        
        $people = false;
        
        if ( $name ){
            $where[ 'name' ] = $name;
        }
       
        $people = empty($where)? Person::all() : Person::where( $where )->get();
        
        //
        // prepare results:
        // fixup sn urls from accounts and photos
        //
        
        if (!empty($people)){
            
            foreach( $people as $key => $person ){
                if ( isset($person->accounts) ){
                    $accts = explode( ',' , $person->accounts );
                    foreach( $accts as $act ){
                        $pair = explode( '=' , $act );
                        if ( !empty( $pair ) && ( count($pair) == 2 )){
                            $url  = $this->getUrl( $pair[0], $pair[1] );
                            if ($url){
                                $people[ $key ][ $pair[0] ] = $url;
                            }
                        }
                    }
                }
                
                if ( isset( $person->photos ) ){
                    $photos = explode( ',' , $person->photos );
                    foreach( $photos as $photo ){
                        $pair = explode( '=' , $photo );
                        if ( !empty( $pair ) && ( count($pair) == 2 )){
                            $people[ $key ][ $pair[0] . '_photo' ] = $pair[1];
                        }
                    }
                }
            
                \Debugbar::info( 'PersonRepository::getPerson - '  .
                                print_r( $people[ $key ], true )  );
            }
        }
        
        return $people;
    }
}