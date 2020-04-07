<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;
use yii\validators\Validator;
use yii\validators\FileValidator;


/**
 * This is the model class for table "property".
 *
 * @property int $id
 * @property int $id_agent
 * @property string $images
 * @property string $title
 * @property string $floor
 * @property string $watt
 * @property string $type_property
 * @property string $type_adv
 * @property string $luas_tanah
 * @property string $luas_bangunan
 * @property string $sertifikat
 * @property string $kamar_tidur
 * @property string $kamar_mandi
 * @property string $garasi
 * @property int $harga
 * @property int $minimal_dp
 * @property string $lokasi_pulau
 * @property string $alamat
 * @property string $kecamatan
 * @property string $kelurahan
 * @property string $kota
 * @property string $deskripsi
 *
 * @property Agent $agent
 */
class Properties extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'propertys';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['id_agent', 'trim'],
            ['id_agent', 'required'],

            // ['images', 'required'],
            [['images'], 'file', 'extensions' => 'jpg, jpeg'],

            ['title', 'trim'],
            ['title', 'required'],
            
            ['jumlah_lantai', 'trim'],
            ['jumlah_lantai', 'required'],

            ['daya_listrik', 'trim'],
            ['daya_listrik', 'required'],

            ['tipe_properti', 'trim'],
            ['tipe_properti', 'required'],
            
            ['tipe_iklan', 'trim'],
            ['tipe_iklan', 'required'],

            ['luas_tanah', 'trim'],
            ['luas_tanah', 'required'],

            ['luas_bangunan', 'trim'],
            ['luas_bangunan', 'required'],
            
            ['sertifikat', 'trim'],
            ['sertifikat', 'required'],

            ['kamar_tidur', 'trim'],
            ['kamar_tidur', 'required'],

            ['kamar_mandi', 'trim'],
            ['kamar_mandi', 'required'],

            ['garasi', 'trim'],
            ['garasi', 'required'],

            ['harga', 'trim'],
            ['harga', 'required'],
            
            ['minimal_dp', 'trim'],
            ['minimal_dp', 'required'],

            ['lokasi_pulau', 'trim'],
            ['lokasi_pulau', 'required'],

            ['alamat', 'trim'],
            ['alamat', 'required'],
            
            ['kecamatan', 'trim'],
            ['kecamatan', 'required'],

            ['kelurahan', 'trim'],
            ['kelurahan', 'required'],

            ['kota', 'trim'],
            ['kota', 'required'],
            
            ['deskripsi', 'trim'],
            ['deskripsi', 'required'],



            // [[  'id_agent', 
            //     'images', 
            //     'title', 
            //     'jumlah_lantai', 
            //     'daya_listrik', 
            //     'tipe_properti', 
            //     'tipe_iklan', 
            //     'luas_tanah', 
            //     'luas_bangunan', 
            //     'sertifikat', 
            //     'kamar_tidur', 
            //     'kamar_mandi', 
            //     'garasi', 
            //     'harga', 
            //     'minimal_dp', 
            //     'lokasi_pulau', 
            //     'alamat', 
            //     'kecamatan', 
            //     'kelurahan', 
            //     'kota', 
            //     'deskripsi'], 'required'],
            // [[  'id_agent', 
            //     'harga', 
            //     'minimal_dp'], 'integer'],
            // [[  'title', 
            //     'jumlah_lantai', 
            //     'daya_listrik', 
            //     'tipe_properti', 
            //     'tipe_iklan', 
            //     'luas_tanah', 
            //     'luas_bangunan', 
            //     'sertifikat', 
            //     'kamar_tidur', 
            //     'kamar_mandi', 
            //     'garasi', 
            //     'lokasi_pulau', 
            //     'alamat', 
            //     'kecamatan', 
            //     'kelurahan', 
            //     'kota', 
            //     'deskripsi'], 'string'],
            // [['images'], 'file', 'extensions' => 'jpg, png, jpeg, svg'],

        ];
    }

    public function tipeProperti()
    {
        return[
            'Rumah' => 'Rumah',
            'Tanah' => 'Tanah Kavling',
        ];
    }

    public function tipeIklan()
    {
        return[
            'Dijual' => 'Dijual',
            'Disewa' => 'Disewa',
        ];
    }

    public function sertifikat()
    {
        return[
            'Hak Milik' => 'Hak Milik',
            'Akta Jual Beli' => 'Akta Jual Beli',
        ];
    }

    public function lokasiPulau()
    {
        return[
            'Pulau Flores' => 'Pulau Flores',
            'Pulau Sumba' => 'Pulau Sumba',
        ];
    }
    

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        // return [
        //     'id' => 'ID',
        //     'id_agent' => 'Id Agent',
        //     'images' => 'Images',
        //     'title' => 'Title',
        //     'floor' => 'Floor',
        //     'watt' => 'Watt',
        //     'type_property' => 'Type Property',
        //     'type_adv' => 'Type Adv',
        //     'luas_tanah' => 'Luas Tanah',
        //     'luas_bangunan' => 'Luas Bangunan',
        //     'sertifikat' => 'Sertifikat',
        //     'kamar_tidur' => 'Kamar Tidur',
        //     'kamar_mandi' => 'Kamar Mandi',
        //     'garasi' => 'Garasi',
        //     'harga' => 'Harga',
        //     'minimal_dp' => 'Minimal Dp',
        //     'lokasi_pulau' => 'Lokasi Pulau',
        //     'alamat' => 'Alamat',
        //     'kecamatan' => 'Kecamatan',
        //     'kelurahan' => 'Kelurahan',
        //     'kota' => 'Kota',
        //     'deskripsi' => 'Deskripsi',
        // ];
    }

    
}
