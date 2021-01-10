<?php

use yii\db\Migration;

/**
 * Class m210109_213544_fdcys
 */
class m210109_213544_fdcys extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        //Önce Tabloları oluşturuyoruz

        //Çalışanlar Tablosu
        $this->createTable('calisanlar', [
            'calisan_id' => $this->primaryKey(),
            'departmanlar_departman_id' => $this->integer()->notNull(),
            'firmalar_firma_id' => $this->integer()->notNull(),
            'calisan_ad_soyad' => $this->string(),
            'calisan_tc_no' => $this->string(),
            'calisan_telefon' => $this->string(),
            'calisan_eposta' => $this->string(),
            'calisan_maas' => $this->integer(),
        ]);

         //Departmanlar
        $this->createTable('departmanlar', [
            'departman_id' => $this->primaryKey(),
            'firmalar_firma_id' => $this->integer()->notNull(),
            'departman_adi' => $this->string()->notNull(),
            'departman_adres' =>  $this->string(),
            'departman_telefon' =>  $this->string(),
        ]);

        //Firmalar
        $this->createTable('firmalar', [
            'firma_id' => $this->primaryKey(),
            'firma_adi' => $this->string(),
            'firma_adresi' =>  $this->string(),
            'firma_telefon' =>  $this->string(),
            'firma_eposta' =>  $this->string(),
            'firma_tipi' =>  $this->string(),
        ]);
        

        //İlişkileri  İçin tabloları foreign key ile birbirine bağlıyoruz.

        $this->createIndex(
            'idx-calisanlar-departmanlar_departman_id',
            'calisanlar',
            'departmanlar_departman_id'
        );

        $this->addForeignKey(
            'fk-calisanlar-departmanlar_departman_id',
            'calisanlar',
            'departmanlar_departman_id',
            'departmanlar',
            'departman_id',
            'CASCADE'
        );


        $this->createIndex(
            'idx-calisanlar-firmalar_firma_id',
            'calisanlar',
            'firmalar_firma_id'
        );


        $this->addForeignKey(
            'fk-calisanlar-firmalar_firma_id',
            'calisanlar',
            'firmalar_firma_id',
            'firmalar',
            'firma_id',
            'CASCADE'
        );


         $this->createIndex(
            'idx-departmanlar-firmalar_firma_id',
            'departmanlar',
            'firmalar_firma_id'
        );

        $this->addForeignKey(
            'fk-departmanlar-firmalar_firma_id',
            'departmanlar',
            'firmalar_firma_id',
            'firmalar',
            'firma_id',
            'CASCADE'
        );


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        //Migrate down sonucunda anahtarların silinmesi ve tabloların düşürülmesi
        
        $this->dropForeignKey(
            'fk-calisanlar-departmanlar_departman_id',
            'calisanlar'
        );

        $this->dropIndex(
            'idx-calisanlar-departmanlar_departman_id',
            'calisanlar'
        );

        $this->dropForeignKey(
            'fk-calisanlar-firmalar_firma_id',
            'calisanlar'
        );

        $this->dropIndex(
            'idx-calisanlar-firmalar_firma_id',
            'calisanlar'
        );

        $this->dropTable('calisanlar');

        //Departmanlar
        $this->dropForeignKey(
            'fk-departmanlar-firmalar_firma_id',
            'departmanlar'
        );

        $this->dropIndex(
            'idx-departmanlar-firmalar_firma_id',
            'departmanlar'
        );

        $this->dropTable('departmanlar');

        //Firmalar
        $this->dropTable('firmalar');
        
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210109_213544_fdcys cannot be reverted.\n";

        return false;
    }
    */
}
