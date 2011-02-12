<li>
<div id="full-comment">
	<div id="post-comment-header" class="comment-header">
		<table>
			<tbody>
				<tr>
					<td class="header-avatar"><!-- Avatar --> </td>
					<td class="comment-header-meta">
						<div class="header-meta-wrapper">
							<cite id="cite" class="comment-cite"><?=$comment['name']?></cite>
							<span class="comment-header-time"><?=date('Y-m-d H:i:s', $comment['created']) ?></span>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="comment-body">
		<div class="comment-message">
			<?php echo $comment['content']?>
		</div>
	</div>
	<div class="comment-footer">
		<div class="comment-footer-left"></div>
		<div class="comment-footer-right">
		</div>
	</div>
</div>
</li>
