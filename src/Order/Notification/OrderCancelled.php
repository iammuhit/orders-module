<?php namespace Anomaly\OrdersModule\Order\Notification;

use Anomaly\OrdersModule\Order\Contract\OrderInterface;
use Anomaly\Streams\Platform\Notification\Message\MailMessage;
use Anomaly\UsersModule\User\Contract\UserInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

/**
 * Class OrderCancelled
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class OrderCancelled extends Notification implements ShouldQueue
{

    use Queueable;

    /**
     * The order instance.
     *
     * @var OrderInterface
     */
    protected $order;

    /**
     * Create a new OrderCancelled instance.
     *
     * @param OrderInterface $order
     */
    public function __construct(OrderInterface $order)
    {
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  UserInterface $notifiable
     * @return array
     */
    public function via(UserInterface $notifiable)
    {
        return ['mail'];
    }

    /**
     * Return the mail message.
     *
     * @param  UserInterface $notifiable
     * @return MailMessage
     */
    public function toMail(UserInterface $notifiable)
    {
        $data = $this->order->toArray();

        return (new MailMessage())
            ->view('anomaly.module.orders::notifications.order_cancelled')
            ->subject(trans('anomaly.module.orders::notification.order_cancelled.subject', $data))
            ->greeting(trans('anomaly.module.orders::notification.order_cancelled.greeting', $data))
            ->line(trans('anomaly.module.orders::notification.order_cancelled.instructions', $data))
            ->action(
                trans('anomaly.module.orders::notification.order_cancelled.button', $data),
                url('admin/orders/edit/' . $this->order->getId())
            );
    }
}
