<?php
namespace App\Http\Util;

use Illuminate\Pagination\BootstrapThreePresenter;
use Illuminate\Support\HtmlString;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/20/2016
 * Time: 4:26 PM
 */
class PagingPresenter extends BootstrapThreePresenter
{
    public function appends(array $appends)
    {
        $this->paginator->appends($appends);
        return $this;
    }

    public function render()
    {
        if ($this->hasPages()) {
            return new HtmlString(sprintf(
                '<ul class="pagination">%s %s %s</ul>',
                $this->getPreviousButton(),
                $this->getLinks(),
                $this->getNextButton()
            ));
        }

        return '';
    }

    /**
     * Get the previous page pagination element.
     *
     * @param  string $text
     * @return string
     */
    public function getPreviousButton($text = '&laquo; Previous')
    {
        // If the current page is less than or equal to one, it means we can't go any
        // further back in the pages, so we will render a disabled previous button
        // when that is the case. Otherwise, we will give it an active "status".
        if ($this->paginator->currentPage() <= 1) {
            return $this->getDisabledTextWrapper($text);
        }

        $url = $this->paginator->url(
            $this->paginator->currentPage() - 1
        );

        return $this->getPageLinkWrapper($url, $text, 'prev');
    }

    /**
     * Render the actual link slider.
     *
     * @return string
     */
    protected function getLinks()
    {
        $html = '';

        if (is_array($this->window['first'])) {
            $html .= $this->getUrlLinks($this->window['first']);
        }

        if (is_array($this->window['slider'])) {
            $html .= $this->getDots();
            $html .= $this->getUrlLinks($this->window['slider']);
        }

        if (is_array($this->window['last'])) {
            $html .= $this->getDots();
            $html .= $this->getUrlLinks($this->window['last']);
        }

        return $html;
    }

    /**
     * Get the next page pagination element.
     *
     * @param  string $text
     * @return string
     */
    public function getNextButton($text = '&raquo; Next')
    {
        // If the current page is greater than or equal to the last page, it means we
        // can't go any further into the pages, as we're already on this last page
        // that is available, so we will make it the "next" link style disabled.
        if (!$this->paginator->hasMorePages()) {
            return $this->getDisabledTextWrapper($text);
        }

        $url = $this->paginator->url($this->paginator->currentPage() + 1);

        return $this->getPageLinkWrapper($url, $text, 'next');
    }
}