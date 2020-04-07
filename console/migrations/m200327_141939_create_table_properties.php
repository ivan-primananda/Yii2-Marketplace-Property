<?php

use yii\db\Migration;

/**
 * Class m200327_141939_create_table_properties
 */
class m200327_141939_create_table_properties extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('propertys', [
            'id' => $this->primaryKey(),
            'id_agent' => $this->integer()->notNull(),
            'images' => $this->string()->notNull(),
            'title' => $this->string()->notNull(),
            'jumlah_lantai' => $this->string()->notNull(),
            'daya_listrik' => $this->string()->notNull(),
            'tipe_properti' => $this->string()->notNull(),
            'tipe_iklan' => $this->string()->notNull(),
            'luas_tanah' => $this->string()->notNull(),
            'luas_bangunan' => $this->string()->notNull(),
            'sertifikat' => $this->string()->notNull(),
            'kamar_tidur' => $this->string()->notNull(),
            'kamar_mandi' => $this->string()->notNull(),
            'garasi' => $this->string()->notNull(),
            'harga' => $this->bigInteger()->notNull(),
            'minimal_dp' => $this->bigInteger()->notNull(),
            'lokasi_pulau' => $this->string()->notNull(),
            'alamat' => $this->string()->notNull(),
            'kecamatan' => $this->string()->notNull(),
            'kelurahan' => $this->string()->notNull(),
            'kota' => $this->string()->notNull(),
            'deskripsi' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('propertys');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200327_141939_create_table_properties cannot be reverted.\n";

        return false;
    }
    */
}
