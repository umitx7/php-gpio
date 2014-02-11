<?php

namespace PhpGpio;

use PhpGpio\Pi;

class Camera
{

    private $width;
    private $height;
    private $quality;
    private $verbose;
    private $timeout;
    private $encoding;
    private $timelapse;
    private $sharpness;
    private $contrast;
    private $saturation;
    private $ISO;
    private $vstab;
    private $ev;
    private $exposure;
    private $awb;
    private $imxfx;
    private $colfx;
    private $metering;
    private $rotation;
    private $hflip;
    private $vflip;
    private $command;
    private $output;

    public function getPhoto()
    {
        $this->setCommand(sprintf(
            "%s %s ",
            'raspistill --nopreview -o /opt/temp/test01.jpg'
        $this->quality,
        $this->width,
        $this->height,
        $this->verbose,
        $this->timeout,
        $this->encoding,
        $this->timelapse,
        $this->sharpness,
        $this->contrast,
        $this->saturation,
        $this->ISO,
        $this->vstab.$ev.$exposure.$awb.$imxfx.$colfx.$metering.$rotation.$hflip.$vflip.' 2>&1 ' ;

$escaped_command = escapeshellcmd($command);
 
exec($command, $test, $retval);
    }






    /**
     * Gets the value of width.
     *
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }
    
    /**
     * Sets the value of width.
     *
     * @param mixed $width the width
     *
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Gets the value of height.
     *
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }
    
    /**
     * Sets the value of height.
     *
     * @param mixed $height the height
     *
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Gets the value of quality.
     *
     * @return mixed
     */
    public function getQuality()
    {
        return $this->quality;
    }
    
    /**
     * Sets the value of quality.
     *
     * @param mixed $quality the quality
     *
     * @return self
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * Gets the value of verbose.
     *
     * @return mixed
     */
    public function getVerbose()
    {
        return $this->verbose;
    }
    
    /**
     * Sets the value of verbose.
     *
     * @param mixed $verbose the verbose
     *
     * @return self
     */
    public function setVerbose($verbose)
    {
        $this->verbose = $verbose;

        return $this;
    }

    /**
     * Gets the value of timeout.
     *
     * @return mixed
     */
    public function getTimeout()
    {
        return $this->timeout;
    }
    
    /**
     * Sets the value of timeout.
     *
     * @param mixed $timeout the timeout
     *
     * @return self
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;

        return $this;
    }

    /**
     * Gets the value of encoding.
     *
     * @return mixed
     */
    public function getEncoding()
    {
        return $this->encoding;
    }
    
    /**
     * Sets the value of encoding.
     *
     * @param mixed $encoding the encoding
     *
     * @return self
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;

        return $this;
    }

    /**
     * Gets the value of timelapse.
     *
     * @return mixed
     */
    public function getTimelapse()
    {
        return $this->timelapse;
    }
    
    /**
     * Sets the value of timelapse.
     *
     * @param mixed $timelapse the timelapse
     *
     * @return self
     */
    public function setTimelapse($timelapse)
    {
        $this->timelapse = $timelapse;

        return $this;
    }

    /**
     * Gets the value of sharpness.
     *
     * @return mixed
     */
    public function getSharpness()
    {
        return $this->sharpness;
    }
    
    /**
     * Sets the value of sharpness.
     *
     * @param mixed $sharpness the sharpness
     *
     * @return self
     */
    public function setSharpness($sharpness)
    {
        $this->sharpness = $sharpness;

        return $this;
    }

    /**
     * Gets the value of contrast.
     *
     * @return mixed
     */
    public function getContrast()
    {
        return $this->contrast;
    }
    
    /**
     * Sets the value of contrast.
     *
     * @param mixed $contrast the contrast
     *
     * @return self
     */
    public function setContrast($contrast)
    {
        $this->contrast = $contrast;

        return $this;
    }

    /**
     * Gets the value of saturation.
     *
     * @return mixed
     */
    public function getSaturation()
    {
        return $this->saturation;
    }
    
    /**
     * Sets the value of saturation.
     *
     * @param mixed $saturation the saturation
     *
     * @return self
     */
    public function setSaturation($saturation)
    {
        $this->saturation = $saturation;

        return $this;
    }

    /**
     * Gets the value of ISO.
     *
     * @return mixed
     */
    public function getISO()
    {
        return $this->ISO;
    }
    
    /**
     * Sets the value of ISO.
     *
     * @param mixed $ISO the i s o
     *
     * @return self
     */
    public function setISO($ISO)
    {
        $this->ISO = $ISO;

        return $this;
    }

    /**
     * Gets the value of vstab.
     *
     * @return mixed
     */
    public function getVstab()
    {
        return $this->vstab;
    }
    
    /**
     * Sets the value of vstab.
     *
     * @param mixed $vstab the vstab
     *
     * @return self
     */
    public function setVstab($vstab)
    {
        $this->vstab = $vstab;

        return $this;
    }

    /**
     * Gets the value of ev.
     *
     * @return mixed
     */
    public function getEv()
    {
        return $this->ev;
    }
    
    /**
     * Sets the value of ev.
     *
     * @param mixed $ev the ev
     *
     * @return self
     */
    public function setEv($ev)
    {
        $this->ev = $ev;

        return $this;
    }

    /**
     * Gets the value of exposure.
     *
     * @return mixed
     */
    public function getExposure()
    {
        return $this->exposure;
    }
    
    /**
     * Sets the value of exposure.
     *
     * @param mixed $exposure the exposure
     *
     * @return self
     */
    public function setExposure($exposure)
    {
        $this->exposure = $exposure;

        return $this;
    }

    /**
     * Gets the value of awb.
     *
     * @return mixed
     */
    public function getAwb()
    {
        return $this->awb;
    }
    
    /**
     * Sets the value of awb.
     *
     * @param mixed $awb the awb
     *
     * @return self
     */
    public function setAwb($awb)
    {
        $this->awb = $awb;

        return $this;
    }

    /**
     * Gets the value of imxfx.
     *
     * @return mixed
     */
    public function getImxfx()
    {
        return $this->imxfx;
    }
    
    /**
     * Sets the value of imxfx.
     *
     * @param mixed $imxfx the imxfx
     *
     * @return self
     */
    public function setImxfx($imxfx)
    {
        $this->imxfx = $imxfx;

        return $this;
    }

    /**
     * Gets the value of colfx.
     *
     * @return mixed
     */
    public function getColfx()
    {
        return $this->colfx;
    }
    
    /**
     * Sets the value of colfx.
     *
     * @param mixed $colfx the colfx
     *
     * @return self
     */
    public function setColfx($colfx)
    {
        $this->colfx = $colfx;

        return $this;
    }

    /**
     * Gets the value of metering.
     *
     * @return mixed
     */
    public function getMetering()
    {
        return $this->metering;
    }
    
    /**
     * Sets the value of metering.
     *
     * @param mixed $metering the metering
     *
     * @return self
     */
    public function setMetering($metering)
    {
        $this->metering = $metering;

        return $this;
    }

    /**
     * Gets the value of rotation.
     *
     * @return mixed
     */
    public function getRotation()
    {
        return $this->rotation;
    }
    
    /**
     * Sets the value of rotation.
     *
     * @param mixed $rotation the rotation
     *
     * @return self
     */
    public function setRotation($rotation)
    {
        $this->rotation = $rotation;

        return $this;
    }

    /**
     * Gets the value of hflip.
     *
     * @return mixed
     */
    public function getHflip()
    {
        return $this->hflip;
    }
    
    /**
     * Sets the value of hflip.
     *
     * @param mixed $hflip the hflip
     *
     * @return self
     */
    public function setHflip($hflip)
    {
        $this->hflip = $hflip;

        return $this;
    }

    /**
     * Gets the value of vflip.
     *
     * @return mixed
     */
    public function getVflip()
    {
        return $this->vflip;
    }
    
    /**
     * Sets the value of vflip.
     *
     * @param mixed $vflip the vflip
     *
     * @return self
     */
    public function setVflip($vflip)
    {
        $this->vflip = $vflip;

        return $this;
    }

    /**
     * Gets the value of command.
     *
     * @return mixed
     */
    public function getCommand()
    {
        return $this->command;
    }
    
    /**
     * Sets the value of command.
     *
     * @param mixed $command the command
     *
     * @return self
     */
    public function setCommand($command)
    {
        $this->command = $command;

        return $this;
    }

    /**
     * Gets the value of output.
     *
     * @return mixed
     */
    public function getOutput()
    {
        return $this->output;
    }
    
    /**
     * Sets the value of output.
     *
     * @param mixed $output the output
     *
     * @return self
     */
    public function setOutput($output)
    {
        $this->output = $output;

        return $this;
    }
}
