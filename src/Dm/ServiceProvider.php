<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 下午4:16
 * Source: ServiceProvider.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm;


use Pimple\ServiceProviderInterface;
use Pimple\Container;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['dm.deleteDevice'] = function ($app)
        {
            return new DeleteDeviceClient($app);
        };
        $app['dm.updateDevice'] = function ($app)
        {
            return new UpdateDeviceClient($app);
        };
        $app['dm.queryDevices'] = function ($app)
        {
            return new QueryDevicesClient($app);
        };
        $app['dm.singleQuery'] = function ($app)
        {
            return new SingleQueryClient($app);
        };
        $app['dm.query.devgroup.specific.member'] = function ($app)
        {
            return new SpecificMemberQueryClient($app);
        };
        $app['dm.append.devgroup.specific.member'] = function ($app)
        {
            return new SpecificMemberAppendClient($app);
        };
        $app['dm.delete.devgroup.specific.member'] = function ($app)
        {
            return new SpecificMemberDeleteClient($app);
        };

    }

}